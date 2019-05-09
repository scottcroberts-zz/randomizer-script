# randomizer-script
Display random phrases on a webpage.

<h2 id="install">&raquo; Installation</h2>

<p style="font-weight:bold"><span class="dest">Please take 5 minutes time and read installation instructions carefully and completely! This will ensure a proper and easy installation.</span></p>

<p><b>-&gt; Using Scott's Random Text script</b></p>

<p>Now that the script is up and running it's time to choose the text/quotes that should be randomly displayed.
You can do so by adding them <b>one per line</b> inside the <b>quotes.txt</b> file. Make
sure you don't leave any empty lines between different quotes!</p>

<p>Alternatively you can enter a list of text/quotes inside Random Text.php file directly.
This is useful if you have large chunks of text that don't fit in one line only.
To learn how to this read further down under &quot;Modifying default settings&quot;.</p>

<p>To display Random Text/Quote on your website using the default settings paste this
code into your web page where you want the text to appear:</p>

<table width="100%" border="1" class="code" cellspacing="0">
<tr>
<td>
<pre>&lt;script type=&quot;text/javascript&quot; src=&quot;http://yourdomain.com/random.php&quot;&gt;&lt;/script&gt;</pre>
</td>
</tr>
</table>

<p>If you are using Randon Text in a PHP file you can include the text directly (without using Javascript)
like this:</p>

<table width="100%" border="1" class="code" cellspacing="0">
<tr>
<td>
<pre>&lt;?php $_GET['type'] = 0; include 'random.php'; ?&gt;</pre>
</td>
</tr>
</table>

<p>As simple as that!</p>



<p><b>-&gt; Modifying default settings</b></p>

<p>To modify default settings open <b>random.php</b> in a plain text editor (like Notepad or Wordpad on Windows, DO NOT use Microsoft Word!)
and scroll down to where it says SETTINGS. Available settings are:</p>

<ol>

<table id="installation" summary="This is a simple two columns table - the first column names a variable and in second one has a descripton and the settings for the varible" width="600">
<thead>
<tr>
<th>Variable</th>
<th>Description/Setup</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td valign="top" nowrap="nowrap"><var>$settings['text_from_file']</var></td>
<td>Name (path) of the file where random text/quotes are located. Text should be
listed one per line. You can use any HTML code you wish inside the text.</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap"><var>$settings['quotes']</var></td>
<td>If you prefer not to choose text from a file you can hard code the text/quotes
to choose from in this variable.<br /><br />
To use the hard-coded quotes you need to set above
variable to <var>$settings['text_from_file'] = '';</var><br /><br />
All quotes must start and end with a single quote ( ' ) and be separated
with a comma ( , ). Text can stretch over multiple lines. Any single quotes inside the text must be escaped with
a backslash ( \ ). In other words: replace any  '  with  \'  <br /><br />
Example:<br><br />
<table width="100%" border="1" class="code" cellspacing="0">
<tr>
<td>
<pre>$settings['quotes'] = array(
'First quote',
'Multi
line
quote',
'Third quote',
'Some text with &lt;b&gt;HTML&lt;/b&gt; code!',
'Any single quotes \' must be escaped with a backslash',
'A quote with a &lt;a href=&quot;http://www.scottroberts.org&quot;&gt;link&lt;/a&gt;!',
'Some long text
that stretches over several
lines and contains some
&lt;b&gt;HTML&lt;/b&gt; code and ends
with a &lt;a href=&quot;http://www.scottroberts.org&quot;&gt;link&lt;/a&gt;',
);</pre>
</td>
</tr>
</table>
<br /><br />
</td>
</tr>
<tr class="odd">
<td valign="top" nowrap="nowrap"><var>$settings['display_type']</var></td>
<td>If set to <b>1</b>, this random text generator will print out valid Javascript code.
This is useful if you want to print random text/quotes on static HTML
pages using Javascript:<br /><br />
<table width="100%" border="1" class="code" cellspacing="0">
<tr>
<td>
<pre>&lt;script type=&quot;text/javascript&quot; src=&quot;random.php&quot;&gt;&lt;/script&gt;</pre>
</td>
</tr>
</table>
<br /><br />
If set to <b>0</b> Random Text will print just the text as received without any formatting.
Use this mode if you are using random text generator as a PHP include or with SSI (*.shtml files):<br /><br />
<table width="100%" border="1" class="code" cellspacing="0">
<tr>
<td>
<pre>&quot;&lt;?php include 'random.php'; ?&gt;</pre>
</td>
</tr>
</table>
<br />
</td>
</tr>
<tr>
<td valign="top" nowrap="nowrap"><var>$settings['allow_otf']</var></td>
<td>If set to <b>1</b>, random text generator will allow changing display_type setting on-the-fly (see below)
Set to <b>0</b> to only allow hard-coded settings (as set in the random.php file).<br /><br />
</td>
</tr>
</tbody>
</table>

</ol>

<p>Save changes and upload the edited random.php file to your server.</p>

<p><b>-&gt; Changing settings on-the-fly</b></p>

<p>You can also modify random text generator display_type settings on-the-fly simply by passing proper values to the script
using query string (when using random text generator as Javascript SRC URL) or variables (when using random text generator as a PHP include).</p>

<p>For changing settings on-the-fly to work variable <var>$settings['allow_otf']</var>
must be set to <b>1</b> (see above)!</p>

<p>Operating mode ($settings['display_type']) can be changed using $_GET['type'] variable. This might sound a bit confusing,
but here are a few examples:</p>

<p>If your default $settings['display_type'] is 0 (PHP include) but would like
to use the same script to show quotes in Javascript you can use this code:</p>

<table width="100%" border="1" class="code" cellspacing="0">
<tr>
<td>
<pre>&lt;script type=&quot;text/javascript&quot; src=&quot;random.php?type=1&quot;&gt;&lt;/script&gt;</pre>
</td>
</tr>
</table>

<p>On the other hand if your default mode is 1 (Javascript) you can use the same
script as an include like this:</p>

<table width="100%" border="1" class="code" cellspacing="0">
<tr>
<td>
<pre>&lt;?php $_GET['type'] = 0; include 'random.php'; ?&gt;</pre>
</td>
</tr>
</table>
