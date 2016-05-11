<h3>Photoswipe</h3>
<p>Intense использует расширение <b>Photoswipe.js</b> для реализации красивых галерей на мобильных устройствах.</p>

<h4>Вставка галлереи на страницу</h4>

<p>Для правильной работы галлереи необходимо добавить следующую разметку в конец целевой страницы перед закрывающим тегом <b>&lt;body&gt;</b>:</p>

<pre><code>
        &lt;div class="pswp" tabindex="-1" role="dialog" aria-hidden="true"&gt;
            &lt;div class="pswp__bg"&gt;&lt;/div&gt;
            &lt;div class="pswp__scroll-wrap"&gt;
                &lt;div class="pswp__container"&gt;
                    &lt;div class="pswp__item"&gt;&lt;/div&gt;
                    &lt;div class="pswp__item"&gt;&lt;/div&gt;
                    &lt;div class="pswp__item"&gt;&lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="pswp__ui pswp__ui--hidden"&gt;
                    &lt;div class="pswp__top-bar"&gt;
                        &lt;div class="pswp__counter"&gt;&lt;/div&gt;
                        &lt;button class="pswp__button pswp__button--close" title="Close (Esc)"&gt;&lt;/button&gt;
                        &lt;button class="pswp__button pswp__button--share" title="Share"&gt;&lt;/button&gt;
                        &lt;button class="pswp__button pswp__button--fs" title="Toggle fullscreen"&gt;&lt;/button&gt;
                        &lt;button class="pswp__button pswp__button--zoom" title="Zoom in/out"&gt;&lt;/button&gt;
                        &lt;div class="pswp__preloader"&gt;
                            &lt;div class="pswp__preloader__icn"&gt;
                                &lt;div class="pswp__preloader__cut"&gt;
                                    &lt;div class="pswp__preloader__donut"&gt;&lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"&gt;
                        &lt;div class="pswp__share-tooltip"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"&gt;
                    &lt;/button&gt;
                    &lt;button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"&gt;
                    &lt;/button&gt;
                    &lt;div class="pswp__caption"&gt;
                        &lt;div class="pswp__caption__center"&gt;&lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Создание модального окна для одного изображения</h4>

<p>Для вставки модального окна c отдельным изображением воспользуйтесь атрибутом
    <b>data-photoswipe-item</b> для соответствующей ссылки и атрибутом <b>data-size</b> для указания размера большой картинки в формате <b>WxH</b>:</p>

<pre><code>
        &lt;a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="link-to-popup-image.jpg"&gt;
            &lt;img width="270" height="270" src="link-to-thumbnail-of-popup-image.jpg" alt=""&gt;
        &lt;/a&gt;
    </code></pre>

<h4>Создание галлереи из множества картинок с элементами управления</h4>

<p>Для вставки галлереи из множества картинок  воспользуйтесь атрибутом <b>data-photoswipe-gallery="gallery"</b> для родительского элемента соответсвующей группы отдельных изображений.</p>

<pre><code>
        &lt;div data-photo-swipe-gallery="gallery"&gt;
            &lt;a class="thumbnail-classic" data-photo-swipe-item=""
                            data-size="1170x600" href="link-to-popup-image.jpg"&gt;
                &lt;img width="270" height="270" src="link-to-thumbnail-of-popup-image.jpg" alt=""&gt;
            &lt;/a&gt;
            &lt;a class="thumbnail-classic" data-photo-swipe-item=""
                            data-size="1170x600" href="link-to-popup-image-2.jpg"&gt;
                &lt;img width="270" height="270" src="link-to-thumbnail-of-popup-image-2.jpg" alt=""&gt;
            &lt;/a&gt;
        &lt;/div&gt;
    </code></pre>