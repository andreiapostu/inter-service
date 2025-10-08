from fastapi import FastAPI, Form
from fastapi.responses import HTMLResponse, JSONResponse
from fastapi.staticfiles import StaticFiles
import requests
import html
import config
import pathlib

app = FastAPI()

@app.post("/form")
async def handle_form(
    localita: str = Form(...),
    telefono: str = Form(...),
    problema: str = Form(...)
):
    localita = html.escape(localita)
    telefono = html.escape(telefono)
    problema = html.escape(problema)

    messaggio = (
        "📩<b><i>RICHIESTA IN ARRIVO</i></b>📩\n\n"
        f"📍<b>Località:</b> {localita}\n"
        f"📞<b>Contatto:</b> {telefono}\n\n"
        f"📝<b>Descrizione Problema:</b> \n<i>{problema}</i>"
    )

    api_url = f"https://api.telegram.org/bot{config.TELEGRAM_BOT_TOKEN}/sendMessage"
    post_data = {
        "chat_id": config.TELEGRAM_CHAT_ID,
        "parse_mode": "HTML",
        "text": messaggio,
    }

    try:
        response = requests.post(api_url, json=post_data)
        response.raise_for_status()
    except requests.RequestException as e:
        return JSONResponse({"status": "error", "detail": str(e)}, status_code=500)

    form_path = pathlib.Path(__file__).parent / "form.html"
    if form_path.exists():
        return HTMLResponse(content=form_path.read_text(encoding="utf-8"))
    else:
        return JSONResponse({"status": "error", "detail": "form.html not found"}, status_code=500)

app.mount("/", StaticFiles(directory="static", html=True), name="static")
