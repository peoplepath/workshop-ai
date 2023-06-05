<?php

require __DIR__.'/vendor/autoload.php';

//putenv("OPENAI_API_KEY=XXX"); // put our API key here

use Kambo\Langchain\DocumentLoaders\TextLoader;
use Kambo\Langchain\Indexes\VectorstoreIndexCreator;
use Kambo\Langchain\LLMs\OpenAI;

$index  = (new VectorstoreIndexCreator())->fromLoaders(
    [
        new TextLoader('bs-CV-struct-embed.txt'),
        new TextLoader('pf-CV-struct-embed.txt')
    ]
);
$openAi = new OpenAI(['temperature' => 0]);

$query = "Představ Bohuslava Šimka";
echo "Otazka: " . $query . "\n";
echo "Odpověd: " .$index->query($query, $openAi). "\n\n";

$query = "Představ Pedra Dona Fontanu";
echo "Otazka: " . $query . "\n";
echo "Odpověd: " .$index->query($query, $openAi). "\n\n";

$query = "Jaké jsou schopnosti Bohuslava Šimka?";
echo "Otazka: " . $query . "\n";
echo "Odpověd: " .$index->query($query, $openAi). "\n\n";

$query = "Jaké jsou schopnosti Pedra Dona Fontanu?";
echo "Otazka: " . $query . "\n";
echo "Odpověd: " .$index->query($query, $openAi). "\n\n";

$query = "Dej mi PHP programatora s alespoň 10 lety zkušeností";
echo "Otazka: " . $query . "\n";
echo "Odpověd: " .$index->query($query, $openAi). "\n\n";

$query = "Dej mi Python programátora";
echo "Otazka: " . $query . "\n";
echo "Odpověd: " .$index->query($query, $openAi). "\n\n";
