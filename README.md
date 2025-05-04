
# 🤖 Laravel + FastAPI + Gemini AI Integration

**Integrasi cepat antara Laravel dan FastAPI dengan Google Generative AI (Gemini 2.0 Flash).**  
Menggunakan **Laravel** sebagai frontend dan **FastAPI** untuk menangani permintaan ke Google Generative AI.

---

## 🚀 Fitur

- ✅ **Integrasi cepat** antara **Laravel** dan **FastAPI**.
- ✅ **Virtual Environment** (Python `venv`) untuk isolasi dependensi.
- ✅ **Gemini 2.0 Flash** sebagai model AI dari Google untuk menjawab pertanyaan.
- ✅ **Backend Python** yang diakses melalui **FastAPI**, memaksimalkan kinerja dan kecepatan.
- ✅ **Frontend Laravel** yang bersih dan responsif.

---

## ⚙️ Instalasi

### 1. Clone Proyek

```bash
git clone https://github.com/kokoy13/chatbot_ai
cd chatbot_ai
```

### 2. Setup FastAPI Server

1. **Masuk ke direktori FastAPI**:
    ```bash
    cd genai-server
    ```

2. **Buat Virtual Environment**:
    ```bash
    python3 -m venv venv
    source venv/bin/activate  # Jika menggunakan Linux/MacOS
    ```

3. **Install dependensi**:
    ```bash
    pip install -r requirements.txt
    ```

4. **Konfigurasi API Key**  
   Buat file `.env` dan masukkan API Key dari [Google Makersuite](https://makersuite.google.com/app):
    ```env
    GOOGLE_API_KEY=YOUR_GOOGLE_API_KEY
    ```

5. **Jalankan Server FastAPI**:
    ```bash
    ./start.sh
    ```

### 3. Setup Laravel

1. **Masuk ke direktori Laravel**:
    ```bash
    cd chatbot
    ```

2. **Install dependensi Laravel**:
    ```bash
    composer install
    cp .env.example .env
    php artisan key:generate
    ```

3. **Jalankan Server Laravel**:
    ```bash
    php artisan serve
    ```

---

## 🧪 Cara Pakai

Buka halaman Laravel di browser:

```
http://127.0.0.1:8000/
```

## 🧠 Teknologi yang Digunakan

- **Laravel** 12 – PHP framework untuk frontend.
- **FastAPI** – Python framework untuk API yang cepat.
- **Google Generative AI** – Model AI untuk menjawab pertanyaan.
- **Uvicorn** – ASGI server untuk FastAPI.
- **Python 3.12+** – Bahasa pemrograman backend.
- **PHP 8+** – Bahasa pemrograman frontend.
- **HTML/Blade Templates** – Untuk tampilan frontend di Laravel.

---

## 📦 Dependencies

### FastAPI Backend:
- `fastapi`
- `uvicorn`
- `google-generativeai`
- `python-dotenv`

### Laravel Frontend:
- `laravel/framework`
- `guzzlehttp/guzzle`

---


## 🙌 Kontribusi

Kami sangat menghargai kontribusi dari komunitas!  
Jika Anda menemukan bug atau memiliki fitur tambahan, silakan buka **Issue** atau buat **Pull Request**.

---

## ✨ Badge

![Laravel](https://img.shields.io/badge/Laravel-v10+-%23F4A261)
![FastAPI](https://img.shields.io/badge/FastAPI-v0.95+-%233F6BFF)
![Python](https://img.shields.io/badge/Python-v3.10+-%233875B8)
![License](https://img.shields.io/badge/license-MIT-%23FF6F61)
