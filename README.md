# PHP SDK для интеграции с ЕИС «Спецсвязь»

![Федеральное государственное унитарное предприятие Главный центр специальной связи](_media/cccb-logo.png)

Веб-сервис предназначен для автоматизации обмена данными между информационными системами контрагентов 
Федерального государственного унитарного предприятия «Главный центр специальной связи» (ФГУП ЦГСС) и 
Единой информационной системой «Спецсвязь».

## Возможности

Основная задача интеграции - работа с отправлениями (создавать, отменять, редактировать, отслеживать).

Весь перечень доступных методов смотрите в разделе Доступные методы.

## Установка

> *note*
> Для работы SDK требуется PHP 7.1 или выше.

```shell
composer reqiure webmasterskaya/cccb-soap-client
```

## Перед началом работы

Для подключения к ЕИС «Спецсвязь», необходимо заключить договор на обслуживание с ФГУП ГЦСС. После подписания 
необходимо попросить сотрудника, который будет обслуживать ваш договор, оформить заявку на подключение к
Единой информационной системе в ИТ блок ФГУП ГЦСС. Дополнительно, вы должны сообщить IP дреса устройств, с которых будут 
выполняться запросы в Единую информационную систему. 

## Как пользоваться

```php
<?php 

// Получение экземпляра клиента
/** @var \Webmasterskaya\Soap\CCCB\CccbClient $client */
$client = \Webmasterskaya\Soap\CCCB\CccbClientFactory::create([
    'login' => 'WebServiceLogin', // Ваш логин доступа к ЕИС «Спецсвязь». Выдается сотрниками ИТ блока ФГУП ГЦСС
    'password' => 'WebServicePassword', // Ваш пароль доступа к ЕИС «Спецсвязь». Выдается сотрниками ИТ блока ФГУП ГЦСС
    'contract_guid' => '00000000-0000-0000-0000-000000000000', // Ваш идентификатор договора контрагента. Выдается сотрниками ИТ блока ФГУП ГЦСС
    'service_guid' => '00000000-0000-0000-0000-000000000000', // Ваш идентификатор услуги (по заключенному договору). Выдается сотрниками ИТ блока ФГУП ГЦСС
]);

// Вызвать метод вебсервиса

/** @var \Webmasterskaya\Soap\CCCB\Type\ProbResponse $probResponse */
$probResponse = $client->probe();

echo $probResponse->getReturn(); // Выведет "Пробный вызов веб-сервиса"
```

## Доступные методы веб-сервиса

> **Notice**
> На самом деле методов куда болше, но их назначение и поведение не документировано

| Метод                                              | Объект запроса                                                        | Объект ответа                                                                          | Описание                                                                                                 |
|----------------------------------------------------|-----------------------------------------------------------------------|----------------------------------------------------------------------------------------|----------------------------------------------------------------------------------------------------------|
| [prob()](src/CccbClient.php)                       | [Prob](src/Type/Prob.php)                                             | [ProbResponse](src/Type/ProbResponse.php)                                              | Пробный вызов веб-сервиса                                                                                |
| [newApplication()](src/CccbClient.php)             | [NewApplication](src/Type/NewApplication.php)                         | [NewApplicationResponse](src/Type/NewApplicationResponse.php)                          | Метод создаёт новую заявку на отправление в ЕИС и возвращает параметры созданной заявки                  |
| [getParcelInfo()](src/CccbClient.php)              | [GetParcelInfo](src/Type/GetParcelInfo.php)                           | [GetParcelInfoResponse](src/Type/GetParcelInfoResponse.php)                            | Метод возвращает информацию об отправлении с указанным приемным номером.                                 |
| [getCost()](src/CccbClient.php)                    | [GetCost](src/Type/GetCost.php)                                       | [GetCostResponse](src/Type/GetCostResponse.php)                                        | Метод возвращает рассчитанную стоимость доставки отправления                                             |
| [detailedAccountReport()](src/CccbClient.php)      | [DetailedAccountReport](src/Type/DetailedAccountReport.php)           | [DetailedAccountReportResponse](src/Type/DetailedAccountReportResponse.php)            | Метод возвращает информацию о принятых отправлениях договора за последние 3 месяца.                      |
| [cancelApplication()](src/CccbClient.php)          | [CancelApplication](src/Type/CancelApplication.php)                   | [CancelApplicationResponse](src/Type/CancelApplicationResponse.php)                    | Метод отменяет заявку на отправление в ЕИС                                                               |
| [automatizationInfo()](src/CccbClient.php)         | [AutomatizationInfo](src/Type/AutomatizationInfo.php)                 | [AutomatizationInfoResponse](src/Type/AutomatizationInfoResponse.php)                  | Метод возвращает информацию об УСС, который обслуживает адрес, переданный в качестве входного параметра. |
| [getParcelHistory()](src/CccbClient.php)           | [GetParcelHistory](src/Type/GetParcelHistory.php)                     | [GetParcelHistoryResponse](src/Type/GetParcelHistoryResponse.php)                      | Метод возвращает характеристики отправления и всю историю событий по этому отправлению.                  |
| [writeParcelCharacteristics()](src/CccbClient.php) | [WriteParcelCharacteristics](src/Type/WriteParcelCharacteristics.php) | [WriteParcelCharacteristicsResponse](src/Type/WriteParcelCharacteristicsResponse.php)  | Метод записывает в базу ЕИС характеристики отправления.                                                  |
| [getContractInfo()](src/CccbClient.php)            | [GetContractInfo](src/Type/GetContractInfo.php)                       | [GetContractInfoResponse](src/Type/GetContractInfoResponse.php)                        | Метод возвращает информацию о принятых за последние 3 месяца отправлениях по договору.                   |
| [getF1Info()](src/CccbClient.php)                  | [GetF1Info](src/Type/GetF1Info.php)                                   | [GetF1InfoResponse](src/Type/GetF1InfoResponse.php)                                    | Метод возвращает информацию по отправлениям из реестра Ф1.                                               |

## Хотите помочь?

На данный момент у проекта "горят" следующие задачи:

- [ ] Привести docblock в порядок
- [ ] Написать исчерпывающее описание всех методов и типов данных web-ервиса
- [ ] Привести код к PSR-12
- [ ] Настроить php-cs-fixer
- [ ] Настроить Psalm
- [ ] Бесконечно искать и править баги
