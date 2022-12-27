<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

/**
 * <p>Метод создаёт в базе ЕИС нового или корректировки существующего документа
 * «Заявка на оказание услуг». При регистрации договора выполняется ряд проверок:</p>
 * <ul>
 * <li>Проверяется, что переданный контрагент заполнен и элемент справочника «Контрагенты»
 *   с указанным уникальным идентификатором существует в базе ЕИС. В случае,
 *   если передано некорректное значение контрагента, возвращается ошибка «Не найден контрагент».</li>
 * <li>Проверяется, что переданный договор заполнен и элемент справочника «Договоры с контрагентами»
 *   с указанным уникальным идентификатором существует в базе ЕИС. В случае,
 *   если передано некорректное значение договора, возвращается ошибка «Не найден договор».</li>
 * <li>Если заполнено значение параметра «CorrectionApplication», то проверяется:
 *  <ul>
 *   <li>В базе ЕИС должна существовать корректируемая заявка.
 *     Если заявка не найдена, возвращается ошибка «Не найдена корректируемая заявка».</li>
 *   <li>Дата сбора корректируемой заявки должна больше текущей даты.
 *     В противном случае возвращается ошибка «Нельзя вводить корректировочную заявку. Заявка уже на исполнении».</li>
 *   <li>Корректируемая заявка должна быть проведена. Если условие не соблюдается,
 *     возвращается ошибка «Нельзя вводить корректировочную заявку для не проведенной заявки».</li>
 *   <li>Запрещается вводить корректирующую заявку для нестандартных заявок.
 *     При попытке скорректировать нестандартную заявку возвращается ошибка
 *     «Для нестандартной заявки корректировочный документ вводить нельзя».</li>
 *   <li>Для корректируемой заявки не должно быть проведенных документов
 *     «Прием отправлений от клиента». В противном случае возвращается ошибка
 *     «Для заявки уже введен Прием отправлений от клиента. Корректировочную заявку вводить нельзя».</li>
 *   <li>Нельзя для одной заявки вводить несколько корректировочных заявок.
 *     Если для корректируемой заявки уже существуют корректирующие заявки,
 *     то возвращается ошибка «Для заявки уже введена корректировочная заявка».</li>
 *   <li>Корректируемая заявка должна отсутствовать в контрольных листах.
 *     При несоблюдении условия возвращается ошибка «Данная заявка уже включена в контрольный лист».</li>
 *  </ul>
 * </ul>
 *
 * <p>Если все проверки пройдены, то производится создание и заполнение нового документа «Заявка на оказание услуг».
 * Новый документ проводится. Если при проведении документа возникают ошибки,
 * то документ записывается без проведения. Если все проверки пройдены и документ записан,
 * то возвращается заполненное значение.</p>
 */
class NewApplication implements RequestInterface
{
    /**
     * @var Application Заявка на отправление
     */
    private $Application;

    /**
     * @var string GUID корректируемой заявки
     */
    private $CorrectionApplication;

    /**
     * Constructor
     *
     * @var Application $Application
     * @var string|null $CorrectionApplication
     */
    public function __construct(Application $Application, string $CorrectionApplication = null)
    {
        $this->Application = $Application;
        $this->CorrectionApplication = $CorrectionApplication;
    }

    /**
     * @return Application
     */
    public function getApplication(): Application
    {
        return $this->Application;
    }

    /**
     * @param Application $Application
     * @return NewApplication
     */
    public function withApplication(Application $Application): NewApplication
    {
        $new = clone $this;
        $new->Application = $Application;

        return $new;
    }

    /**
     * @return string
     */
    public function getCorrectionApplication(): ?string
    {
        return $this->CorrectionApplication;
    }

    /**
     * @param string $CorrectionApplication
     * @return NewApplication
     */
    public function withCorrectionApplication(string $CorrectionApplication): NewApplication
    {
        $new = clone $this;
        $new->CorrectionApplication = $CorrectionApplication;

        return $new;
    }
}

