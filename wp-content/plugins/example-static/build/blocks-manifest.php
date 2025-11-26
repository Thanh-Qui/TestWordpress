<?php
// This file is generated. Do not modify it manually.
return array(
	'example-static' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'create-block/example-static',
		'version' => '0.1.0',
		'title' => 'Example Static',
		'category' => 'widgets',
		'icon' => 'smiley',
		'description' => 'Example block scaffolded with Create Block tool.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'example-static',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => 'h2'
			),
			'description' => array(
				'type' => 'string',
				'source' => 'html',
				'selector' => 'p'
			),
			'backgroundColor' => array(
				'type' => 'string',
				'default' => '#ffffff'
			),
			'textColor' => array(
				'type' => 'string',
				'default' => '#000000'
			),
			'padding' => array(
				'type' => 'number',
				'default' => 40
			),
			'fontSize' => array(
				'type' => 'number',
				'default' => 32
			),
			'fontFamily' => array(
				'type' => 'string',
				'default' => 'Arial, sans-serif'
			)
		)
	)
);
