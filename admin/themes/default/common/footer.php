        </div>
        
    </section>

    <footer class="container">
    
        <div class="ten columns offset-by-two">
        <?php admin_plugin_footer(); ?>
        <p class="left"><a href="http://www.omeka.org" target="_blank"><?php echo __('Powered by Omeka') ?></a> | <a href="http://omeka.org/codex/" target="_blank"><?php echo __('Documentation'); ?></a> | <a href="http://omeka.org/forums/" target="_blank"><?php echo __('Support Forums'); ?></a></p>
        
        <p class="right"><?php echo __('Version %s', OMEKA_VERSION); ?> | <a href="<?php echo html_escape(uri('system-info')); ?>"><?php echo __('More information about your system'); ?></a></p>
        
        </div>
    </footer>

</section>

</body>

</html>
