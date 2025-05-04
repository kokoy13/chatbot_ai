from fastapi import FastAPI
from pydantic import BaseModel
from typing import List, Dict
from dotenv import load_dotenv
import google.generativeai as genai
import os

load_dotenv()
genai.configure(api_key=os.getenv("GOOGLE_API_KEY"))
model = genai.GenerativeModel("gemini-2.0-flash")
app = FastAPI()

class Prompt(BaseModel):
    prompt: str
    history: List[Dict[str, str]] = []

@app.post("/ask")
async def ask_genai(data: Prompt):
    try:
        # Format history untuk Gemini
        history = [
            {
                "role": "user" if msg["role"] == "user" else "model",
                "parts": [msg["text"]]
            }
            for msg in data.history
        ]

        chat = model.start_chat(history=history)
        response = chat.send_message(data.prompt)
        return {"response": response.text}
    except Exception as e:
        return {"error": str(e)}
