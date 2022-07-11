<?php

use yii\helpers\Url;

?>

<div class="socials">
    <div class="chare-buttons-wrapper" style="margin-bottom: 25px">
        <div class="share-buttons" style="">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= Url::canonical() . '/' ?>" target="_blank" onclick="return Share.me(this);" rel="noopener">
                <div class="telegram share-block">
                    <img class="soc-icon-size" src="/images/social_icon/facebook.png" alt="facebook">
                </div>
            </a>
            <a href="https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Ffiddle.jshell.net%2F_display%2F&text=<?= Url::canonical() ?>"
               target="_blank" onclick="return Share.me(this)" rel="noopener">
                <div class="telegram share-block">
                    <img class="soc-icon-size" src="/images/social_icon/twitter.png" alt="twitter">
                </div>
            </a>
            <a href="tg://msg_url?url=<?= Url::canonical() ?>" rel="noopener">
                <div class="telegram share-block">
                    <img class="soc-icon-size" src="/images/social_icon/telegram.png" alt="telegram">
                </div>
            </a>
            <a class="share-btn-in" href="viber://forward?text=<?= Url::canonical() ?>" rel="noopener">
                <div class="viber share-block">
                    <img class="soc-icon-size" src="/images/social_icon/viber.png" alt="viber">
                </div>
            </a>
            <a href="whatsapp://send?text=<?= Url::canonical() ?>" data-action="share/whatsapp/share" rel="noopener">
                <div class=" telegram share-block">
                    <img class="soc-icon-size" src="/images/social_icon/whatsapp.png" alt="whatsapp">
                </div>
            </a>
            <a class="share-btn-vk" href="https://vk.com/share.php?url=<?= Url::canonical() ?>" target="_blank"
               onclick="return Share.me(this);" rel="noopener">
                <div class="vk share-block">
                    <img class="soc-icon-size" src="/images/social_icon/vk.png" alt="vk">
                </div>
            </a>
        </div>
    </div>
</div>

<script>
    Share = {
        me : function(el){
            Share.popup(el.href);
            return false;
        },

        popup: function(url) {
            window.open(url,'','toolbar=0,status=0,width=626,height=436');
        }
    };
</script>