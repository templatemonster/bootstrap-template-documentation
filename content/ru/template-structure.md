# Структура шаблона
Данный раздел содержит информацию о структуре папок и файлов в проекте.

## Проект с одним шаблоном
- @fa-folder **dev** - содержит все файлы в исходном виде (сокращение от 'development')
    - @fa-folder **components** - папка с компонентами
        - @fa-folder **<компонент>** - название папки соответствует названию компонента, содержит исходные файлы (таких папок может быть сколько угодно)
            - @fa-file **\*.pug**
            - @fa-file **\*.scss**
            - @fa-file **\*.css**
            - @fa-file **\*.js**
            - @fa-file **\*.min.js**
            - @fa-file **\*.php**
    - @fa-file **\*.html** - страницы шаблона
- @fa-folder **dist** - содержит оптимизированные файлы для отправки на сервер (сокращение от 'distributive')
    - @fa-folder **components** - папка с компонентами
        - @fa-folder **<компонент>** - название папки соответствует названию компонента, содержит оптимизированные файлы (здесь не может быть **\*.pug** и **\*.scss** файлов, таких папок может быть сколько угодно)
            - @fa-file **\*.css**
            - @fa-file **\*.min.js**
            - @fa-file **\*.php**
    - @fa-file **\*.html** - страницы шаблона
- @fa-file **package.json** - файл содержащий необходимую информацию о проекте
- @fa-file **gulpfile.js** - файл для генерации Gulp-тасков
- @fa-file **config.js** - файл с параметрами для выполняемых Gulp-тасков

## Проект с несколькими шаблонами
- @fa-folder **dev** - содержит все файлы в исходном виде (сокращение от 'development')
    - @fa-folder **<шаблон сайта>** - папка с шаблоном сайта, таких будет 2 и более
        - @fa-folder **components** - папка с компонентами
            - @fa-folder **<компонент>** - название папки соответствует названию компонента, содержит исходные файлы (таких папок может быть сколько угодно)
                - @fa-file **\*.pug**
                - @fa-file **\*.scss**
                - @fa-file **\*.css**
                - @fa-file **\*.js**
                - @fa-file **\*.min.js**
                - @fa-file **\*.php**
        - @fa-file **\*.html** - страницы шаблона
        - @fa-file **build.js** - файл для сборки конкретного шаблона (может отсутствовать)
- @fa-folder **dist** - содержит оптимизированные файлы для отправки на сервер (сокращение от 'distributive')
    - @fa-folder **<шаблон сайта>** - папка с шаблоном сайта, таких будет 2 и более
        - @fa-folder **components** - папка с компонентами
            - @fa-folder **<компонент>** - название папки соответствует названию компонента, содержит оптимизированные файлы (здесь не может быть **\*.pug** и **\*.scss** файлов, таких папок может быть сколько угодно)
                - @fa-file **\*.css**
                - @fa-file **\*.min.js**
                - @fa-file **\*.php**
        - @fa-file **\*.html** - страницы шаблона
- @fa-file **package.json** - файл содержащий необходимую информацию о проекте
- @fa-file **gulpfile.js** - файл для генерации Gulp-тасков
- @fa-file **config.js** - файл с параметрами для выполняемых Gulp-тасков