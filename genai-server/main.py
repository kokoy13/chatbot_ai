from fastapi import FastAPI
from pydantic import BaseModel
from dotenv import load_dotenv
import google.generativeai as genai
import os

load_dotenv()
genai.configure(api_key=os.getenv("GOOGLE_API_KEY"))
model = genai.GenerativeModel("gemini-2.0-flash")

app = FastAPI()

class Prompt(BaseModel):
    prompt: str

@app.post("/ask")
async def ask_genai(data: Prompt):
    try:
        response = model.generate_content(data.prompt)
        return {"response": response.text}
    except Exception as e:
        return {"error": str(e)}
