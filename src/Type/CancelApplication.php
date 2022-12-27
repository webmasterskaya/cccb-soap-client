<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * <p>Метод WEB-сервиса необходим для отмены заявки в ЕИС. В случае, если в ЕИС по уникальному идентификатору не удалось найти документа
 * «Заявка на оказание услуг», возвращается ошибка «Не найдена заявка».</p>
 * <p>Нельзя отменить:</p>
 * <ul>
 * <li>заявки, дата сбора которых раньше текущей даты. При попытке отмены такой заявки возвращается ошибка «Нельзя отменить заявку. Заявка уже на исполнении»;</li>
 * <li>не проведенные заявки. Возвращается ошибка «Документ не проведен. Отмена невозможна.»;</li>
 * <li>псевдо-заявки. Возвращается ошибка «Нельзя отменить псевдо заявку.»;</li>
 * <li>скорректированные заявки. Возвращается ошибка «Для заявки <Найденная заявка> уже введены корректировочные заявки»;</li>
 * <li>заявки, для которых уже осуществлен прием. Возвращается ошибка «Для заявки <Найденная заявка> уже введены приемы».</li>
 * </ul>
 */
class CancelApplication implements RequestInterface
{
    /**
     * @var string
     */
    private $ApplicationGUID;

    /**
     * Constructor
     *
     * @var string $ApplicationGUID
     */
    public function __construct(string $ApplicationGUID)
    {
        $this->ApplicationGUID = $ApplicationGUID;
    }

    /**
     * @return string
     */
    public function getApplicationGUID(): string
    {
        return $this->ApplicationGUID;
    }

    /**
     * @param string $ApplicationGUID
     * @return CancelApplication
     */
    public function withApplicationGUID(string $ApplicationGUID): CancelApplication
    {
        $new = clone $this;
        $new->ApplicationGUID = $ApplicationGUID;

        return $new;
    }
}

