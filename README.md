#NotificationBundle
<p>
For use it in another project
</p>

<pre><code>
    [...]
        "require" : {
            [...]
            "NotificationBundle" : "dev-master"
        },
        "repositories" : [{
                "type" : "vcs",
                "url" : "https://github.com/mafacadev/NotificationBundle.git"
        }],
    [...]
</code></pre>

<p>After that, execute this comand in a terminal</p>
<pre><code>
    composer update osmos/notification-bundle
</code></pre>

<p>Then you need put this parameter</p>
 
<pre><code>
    notification_service_url: 'http://172.17.0.2:8085/notifications/'
</code></pre>

<p>Finally, you need add the new Bundle into appKernel.php</p>

<pre><code>
    new \NotificationBundle\NotificationBundle()
</code></pre>
