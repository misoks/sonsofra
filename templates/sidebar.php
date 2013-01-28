<aside class="sidebar twitter">
    <h1>Twitter</h1>
    <script src="http://widgets.twimg.com/j/2/widget.js"></script>
    <script>
        new TWTR.Widget({
          version: 2,
          type: 'profile',
          rpp: 7,
          interval: 6000,
          width: 300,
          height: 600,
          theme: {
            shell: {
              background: '#100f0d',
              color: '#d7d5c0'
            },
            tweets: {
              background: '#100f0d',
              color: '#d7d5c0',
              links: 'rgb(163, 32, 32)'
            }
          },
          features: {
            scrollbar: false,
            loop: false,
            live: false,
            hashtags: true,
            timestamp: true,
            avatars: false,
            behavior: 'all'
          }
        }).render().setUser('SonsOfRa').start();
    </script>
</aside>