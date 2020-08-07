<?php

$bd = new SQLite3("filmes.db");

$excluir = "DROP TABLE filmes";
$bd->exec($excluir);

$criatabela = "CREATE TABLE IF NOT EXISTS filmes (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	titulo VARCHAR(200) NOT NULL,
	sinopse TEXT,
	poster VARCHAR(200),
	nota DECIMAL(2,1)
)";

if ($bd->exec($criatabela)): ?>
	<script> alert("Tabela Filmes carregada com sucesso.");</script><?php
else: ?>
	<script> alert("Erro ao criar tabela Filmes.");</script><?php 
endif;

$inserir = "INSERT INTO filmes(titulo,sinopse,poster,nota)
	VALUES(
	'Vingadores (2012)',
	'Loki, o irmão de Thor, ganha acesso ao poder ilimitado do cubo cósmico ao roubá-lo de dentro das instalações da S.H.I.E.L.D. Nick Fury, o diretor desta agência internacional que mantém a paz, logo reúne os únicos super-heróis que serão capazes de defender a Terra de ameaças sem precedentes. Homem de Ferro, Capitão América, Hulk, Thor, Viúva Negra e Gavião Arqueiro formam o time dos sonhos de Fury, mas eles precisam aprender a colocar os egos de lado e agir como um grupo em prol da humanidade.',
	'https://image.tmdb.org/t/p/w300/xX2xp5QSQPhnqZK9BnluFg9v8qs.jpg', 
	9.7
	)";

if ($bd->exec($inserir)): ?>
	<script> alert("Dados inseridos na tabela Filmes.");</script><?php 
else: ?>
	<script> alert("Erro ao criar inserir dados em tabela.");</script><?php 
endif;

?>