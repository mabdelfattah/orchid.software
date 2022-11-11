---
title: Установка платформы
description: Это руководство по началу работы поможет вам начать использовать ORCHID.
---


Прежде чем вы сможете использовать платформу, нужно будет установить ее. Это руководство поможет вам выполнить простую установку, чтобы запустить проект.


## Создать проект

> **Примечание.** Если у вас уже установлен ​​Laravel, вы можете пропустить этот шаг..

Платформа является пакетом для фреймворка Laravel, необходимо сначала установить его. 
Это можно сделать с помощью инструмента управления зависимостями Composer, выполнив в терминале команду `composer create-project`:

```php
$ composer create-project laravel/laravel orchid-project "9.*" --prefer-dist
```

Или, если вы предпочитаете установщик Laravel:

```php
$ laravel new orchid-project
```


Для получения дополнительной информации о том, как установить Laravel, используйте [Официальное руководство по установке laravel](https://laravel.com/docs/installation).

> **У вас нет Composer?** Его легко установить, следуя инструкциям на странице [загрузки](https://getcomposer.org/download/).

Это создаст новый каталог `orchid-project`, загрузит в него зависимости и сгенерирует основные каталоги и файлы, которые понадобятся для начала работы. 
Другими словами, установит ваш новый проект фреймворка.

**Не забывайте**
- Установить права «chmod -R o+w» на каталоги `storage` и `bootstrap/cache`
- Отредактировать `.env` файл

## Добавить зависимость

Перейдите в созданный каталог проекта и выполните команду:
```php
$ composer require orchid/platform
```

> **Примечание.** Если вы устанавливали Laravel иначе, то возможно, вам придется сгенерировать ключ
используя комманду `php artisan key:generate`

> **Примечание.** Вам также необходимо создать новую базу данных и обновить `.env` файл с учетными данными и добавить URL-адрес вашего приложения в переменную `APP_URL`.


## Установка платформы

> **Примечание.** При установке будет перезаписана модель `app/Models/User`.

Запустим процесс установки, выполнив команду:

```php
php artisan orchid:install
```

## Создание пользователя

Для создания пользователя с максимальными правами на текущий момент, необходимо выполнить команду передав
имя пользователя, электронный адрес и пароль:

```php
php artisan orchid:admin admin admin@admin.com password
```

## Запуск локального сервера

Для запуска проекта можно использовать встроенный сервер:
```php
php artisan serve
```

Откройте браузер и перейдите к `http://localhost:8000/admin`. Если все работает, вы увидите страницу входа в панель управления. Позже, когда вы закончите работу, остановите сервер, нажав `Ctrl+C` в используемом терминале.

> **Примечание.** Если используемая среда выполнения настроена на другой домен (например orchid.loc),
 то панель администратора будет недоступна. В этом случае требуется указать используемый домен в файле конфигурации `config/platform.php`
 или в `.env`. Это позволяет делать доступной панель администратора на другом домене или поддомене, например `platform.example.com`.


## Обновление

Находясь в директории проекта используйте `Composer` для обновления пакета:

```php
composer update orchid/platform --with-dependencies
```

> **Примечание.** Вы так же можете обновить все ваши зависимости, перечисленные в файле `composer.json`, выполнив команду `composer update`.

После обновления до новой версии обязательно обновите ресурсы JavaScript и CSS, используя `orchid:publish` и очистите все кешированные представления с помощью `view:clear`.
```bash
php artisan orchid:publish
php artisan view:clear
```

## Обновление ресурсов

Чтобы обеспечить обновление ресурсов при загрузке новой версии, вы можете добавить хук Composer в файл `composer.json` файл вашего проекта для автоматической публикации последних ресурсов:

```json
"scripts": {
    "post-update-cmd": [
      "@php artisan orchid:publish --ansi"
  ]
}
```

> **Возникли проблемы во время установки?** Возможно, что у кого-то уже была такая проблема https://github.com/orchidsoftware/platform/issues . Если нет, вы можете отправить сообщение или обратиться за [помощью](https://github.com/orchidsoftware/platform/issues/new).


## Что делать дальше?

Установленный пакет уже имеет несколько экранов, на которых показаны различные поля ввода, маски, состояния, а также некоторая компоновка интерфейса. Вы можете попробовать их или сразу перейти к пошаговым примерам работы с пакетом на странице ["Быстрый старт"](/ru/docs/quickstart) или просто погрузиться в [документацию](/ru/docs/screens).