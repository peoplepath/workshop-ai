<?php

require __DIR__.'/vendor/autoload.php';

//putenv("OPENAI_API_KEY=XXX"); // put our API key here

use Kambo\Langchain\DocumentLoaders\TextLoader;
use Kambo\Langchain\Indexes\VectorstoreIndexCreator;
use Kambo\Langchain\LLMs\OpenAIChat;

$index  = (new VectorstoreIndexCreator())->fromLoaders(
    [
        new TextLoader('bs-CV-struct-embed.txt'),
        new TextLoader('pf-CV-struct-embed.txt')
    ]
);
$openAi = new OpenAIChat(['temperature' => 0]);

$query = "Představ Bohuslava Šimka, mluv přitom jako pirát v češtině a jenom v pár bodech.";
echo "Otázka: " . $query . "\n";
echo "Odpověď: " .$index->query($query, $openAi). "\n";
