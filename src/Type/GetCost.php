<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * <p>Метод WEB-сервиса возвращает рассчитанную стоимость доставки отправления. Возможные ошибки при расчете стоимости:</p>
 * <ul>
 * <li>В договоре не указан тарифный план для расчета. Возвращается ошибка «Для договора не указан тарифный план»;</li>
 * <li>В переданных параметрах расчета не указаны индексы вложения или указаны в неверном формате.
 *   Возвращается ошибка «Неверно указаны индексы вложения»;</li>
 * <li>В случае международной доставки, если не удалось определить страну доставки,
 *   возвращается ошибка «Неверно указана страна доставки»;</li>
 * <li>Другие ошибки, обрабатываемые подсистемой расчета стоимости.
 *   В этом случае возвращается подробное описание ошибки</li>
 * </ul>
 */
class GetCost implements RequestInterface
{
    /**
     * @var CostingOptions
     */
    private $CostingOptions;

    /**
     * Constructor
     *
     * @var CostingOptions $CostingOptions
     */
    public function __construct(CostingOptions $CostingOptions)
    {
        $this->CostingOptions = $CostingOptions;
    }

    /**
     * @return CostingOptions
     */
    public function getCostingOptions(): CostingOptions
    {
        return $this->CostingOptions;
    }

    /**
     * @param CostingOptions $CostingOptions
     * @return GetCost
     */
    public function withCostingOptions(CostingOptions $CostingOptions): GetCost
    {
        $new = clone $this;
        $new->CostingOptions = $CostingOptions;

        return $new;
    }
}

