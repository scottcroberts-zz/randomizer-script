<?php

////////////////////////////////////////////////////////////////////////////////
// SETTINGS
////////////////////////////////////////////////////////////////////////////////

/* File, where the random text/quotes are stored one per line */
$settings['text_from_file'] = 'quotes.txt';

/*
   If you prefer you can list quotes that RanTex will choose from here.
   In this case set above variable to $settings['text_from_file'] = '';
*/
$settings['quotes'] = array(
'True humility is not thinking less of yourself; it is thinking of yourself less.',
'You are never too old to set another goal or to dream a new dream.',
'I believe in Christianity as I believe that the sun has risen: not only because I see it, but because by it I see everything else.',
'We are what we believe we are.',
'You can never get a cup of tea large enough or a book long enough to suit me.',
'Friendship is born at that moment when one person says to another: What! You too? I thought I was the only one.',
'Aim at heaven and you will get earth thrown in. Aim at earth and you get neither.',
'Some day you will be old enough to start reading fairy tales again.',
'You don\'t have a soul. You are a Soul. You have a body.',
'God cannot give us a happiness and peace apart from Himself, because it is not there. There is no such thing.',
);

/*
   How to display the text?
   0 = raw mode: print the text as it is, when using RanTex as an include
   1 = Javascript mode: when using Javascript to display the quote
*/
$settings['display_type'] = 1;

/* Allow on-the-fly settings override? 0 = NO, 1 = YES */
$settings['allow_otf'] = 1;

////////////////////////////////////////////////////////////////////////////////
// DO NOT EDIT BELOW
////////////////////////////////////////////////////////////////////////////////

// Override type?
if ($settings['allow_otf'] && isset($_GET['type']))
{
	$type = intval($_GET['type']);
}
else
{
	$type = $settings['display_type'];
}

// Get a list of all text options
if ($settings['text_from_file'])
{
	$settings['quotes'] = file($settings['text_from_file']);
}

// If we have any text choose a random one, otherwise show 'No text to choose from'
if (count($settings['quotes']))
{
	$txt = $settings['quotes'][array_rand($settings['quotes'])];
}
else
{
	$txt = 'No text to choose from';
}

// Output the image according to the selected type
if ($type)
{
	// New lines will break Javascript, remove any and replace them with <br />
	$txt = nl2br(trim($txt));
	$txt = str_replace(array("\n","\r"),'',$txt);

	// Set the correct MIME type
	header("Content-type: text/javascript");

	// Print the Javascript code
	echo 'document.write(\''.addslashes($txt).'\')';
}
else
{
	echo $txt;
}
?>
