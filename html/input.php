<?php include_once('../_common/functions.php'); ?>

<?php FE::head('input', '<a href="//frontendstuff.com/">Frontend Stuff</a> / <a href="//frontendstuff.com/html/">HTML</a>', null, '400%', '170%'); ?>
<section>
  <h2>Description</h2>
  <p>TODO</p>
  <a href="http://www.w3.org/TR/html5/the-input-element.html#the-input-element">W3C - 4.10.7 The input element</a>
</section>

<section>
  <h2>Example</h2>
  <form>
    <label for="fname">First Name</label><input type="text" id="fname">
    <label for="lname">Last Name</label><input type="text" id="lname">
  </form>
  
<pre class="brush: html;">
&lt;form&gt;
  &lt;label for=&quot;fname&quot;&gt;First Name&lt;/label&gt;&lt;input type=&quot;text&quot; id=&quot;fname&quot;&gt;
  &lt;label for=&quot;lname&quot;&gt;Last Name&lt;/label&gt;&lt;input type=&quot;text&quot; id=&quot;lname&quot;&gt;
&lt;/form&gt;
</pre>
</section>

<section>
  <h2>Attributes</h2>
  <ul>
    <li>accept</li>
    <li>alt</li>
    <li>autocomplete</li>
    <li>autofocus</li>
    <li>checked</li>
    <li>dirname</li>
    <li>disabled</li>
    <li>form</li>
    <li>formaction</li>
    <li>formenctype</li>
    <li>formmethod</li>
    <li>formnovalidate</li>
    <li>formtarget</li>
    <li>height</li>
    <li>list</li>
    <li>max</li>
    <li>maxlength</li>
    <li>min</li>
    <li>multiple</li>
    <li>name</li>
    <li>pattern</li>
    <li>placeholder</li>
    <li>readonly</li>
    <li>required</li>
    <li>size</li>
    <li>src</li>
    <li>step</li>
    <li>type</li>
    <li>value</li>
    <li>width</li>
  </ul>
</section>

<section>
  <h2>Input types</h2>
  <ul>
    <li>button</li>
    <li>checkbox</li>
    <li>color</li>
    <li>date</li>
    <li>datetime</li>
    <li>datetime-local</li>
    <li>email</li>
    <li>file</li>
    <li>hidden</li>
    <li>image</li>
    <li>month</li>
    <li>number</li>
    <li>password</li>
    <li>radio</li>
    <li>range</li>
    <li>reset</li>
    <li>search</li>
    <li>submit</li>
    <li>tel</li>
    <li>text</li>
    <li>time</li>
    <li>url</li>
    <li>week</li>
  </ul>
</section>

<section>
  <h2>Input type demos</h2>
  <form>
  <table>
    <thead>
      <tr><td>Type</td><td>Live Test</td><td>Screenshots</td></tr>
    </thead>
    <tfoot></tfoot>
    
    <tbody>
      <tr><td>button</td><td><input type="button" value="Button"></td><td></td></tr>
      <tr><td>checkbox</td><td><input type="checkbox"></td><td></td></tr>
      <tr><td>color</td><td><input type="color"></td><td></td></tr>
      <tr><td>date</td><td><input type="date"></td><td></td></tr>
      <tr><td>datetime</td><td><input type="datetime"></td><td></td></tr>
      <tr><td>datetime-local</td><td><input type="datetime-local"></td><td></td></tr>
      <tr><td>email</td><td><input type="email"></td><td></td></tr>
      <tr><td>file</td><td><input type="file" value="File"></td><td></td></tr>
      <tr><td>hidden</td><td><input type="hidden"></td><td></td></tr>
      <tr><td>image</td><td><input type="image"></td><td></td></tr>
      <tr><td>month</td><td><input type="month"></td><td></td></tr>
      <tr><td>number</td><td><input type="number"></td><td></td></tr>
      <tr><td>password</td><td><input type="password"></td><td></td></tr>
      <tr><td>radio</td><td><input type="radio"></td><td></td></tr>
      <tr><td>range</td><td><input type="range"></td><td></td></tr>
      <tr><td>reset</td><td><input type="reset" value="Reset"></td><td></td></tr>
      <tr><td>search</td><td><input type="search" value="Search"></td><td></td></tr>
      <tr><td>submit</td><td><input type="submit" value="Submit"></td><td></td></tr>
      <tr><td>tel</td><td><input type="tel"></td><td></td></tr>
      <tr><td>text</td><td><input type="text"></td><td></td></tr>
      <tr><td>time</td><td><input type="time"></td><td></td></tr>
      <tr><td>url</td><td><input type="url"></td><td></td></tr>
      <tr><td>week</td><td><input type="week"></td><td></td></tr>
    </tbody>
  </table>
  </form>
</section>



  
<?php FE::foot('input'); ?>
