<footer class="footer">
  <div class="container">
    <ul class="fd-footer-links">
      <li>O atual timestamp UNIX é: {{ date('F d, Y - H:i:s', time()) }}.</li>
      <li>|</li>
      <li><a href="about">Sobre</a></li>
      <li>|</li>
      <li><a href="http://fordev.com.br" target="_blank">Fordev</a></li>
    </ul>
  </div>
</footer>
<script src="{{ elixir("js/app.js") }}"></script>
