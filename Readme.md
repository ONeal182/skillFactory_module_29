# инструкция по зхапуску докер
Зайдите в папку с проектом через терминал и выполните две команды

# Запуск

Выгружаем данный репозиторий в папку с проектом

При первом запуске вам нужно выполнить команду build что бы конфиг развернул все зависимости установил пакеты и скопировал ваш проект

## Команда build

```
docker-compose build
```

После установки больше команду билд не запускаем

## Команда up запуск

Запускает контейнер без установки зависимостей
```
docker-compose up -d
```

## Команда stop
Что бы остановить наш контейнер используйте команду down

```
docker-compose down
```

Остановить текущий контейнер в рабочей области

## Команда restart

Перезапускает контейнер

```
docker-compose restart
```

## Запуск консоли внутри контейнера

Команда нужна если вам нужно выполнить манипуляции с командной строкой. Например обновить зависимости композера. Внимание! Просто выполнение из терминала вне контейнера может не принести результата

```

 docker exec -it app bash

```
