# AI manéž workshop

Prezentace je k dispozici v repozitáři pod jménem [PPH-AI-prezentace.pdf](PPH-AI-prezentace.pdf)

Video záznam pak na: https://youtu.be/cjtmHW5uZ2Q

## LangChain příklady

V příkladech je potřeba poskytnout vlastní OpenAI API klíč.

```bash
composer install
php embed-cv.php
```

## Jak na lokální LLM model

**Jenom Linux je podporovaný!**

Jak spustit lokální model (je nutné stáhnout ggjt model z huggingface):
```bash
composer install
cd models
wget https://huggingface.co/LLukas22/gpt4all-lora-quantized-ggjt/resolve/main/ggjt-model.bin
cd ..
php LLamaCPP.php
```
