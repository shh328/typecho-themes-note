<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by <a href="https://typecho.org">Typecho</a> Theme <a href="https://shinote.net/">SHI 記 note</a>'); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>

<button id="toggle-dark-mode">🌙 暗色模式</button>

</body>

<script>
  const toggleButton = document.getElementById('toggle-dark-mode');

  // 初始化按钮文字
  if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark-mode');
    toggleButton.textContent = '☀️ 亮色模式';
  }

  toggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
    const isDark = document.body.classList.contains('dark-mode');
    toggleButton.textContent = isDark ? '☀️ 亮色模式' : '🌙 暗色模式';
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
  });
</script>

</html>
