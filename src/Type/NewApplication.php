<?php

namespace Webmasterskaya\Soap\CCCB\Type;

use Webmasterskaya\Soap\Base\Type\RequestInterface;

class NewApplication implements RequestInterface
{
    /**
     * @var \Webmasterskaya\Soap\CCCB\Type\Application
     */
    private $Application;

    /**
     * @var string
     */
    private $CorrectionApplication;

    /**
     * Constructor
     *
     * @var \Webmasterskaya\Soap\CCCB\Type\Application $Application
     * @var string $CorrectionApplication
     */
    public function __construct($Application, $CorrectionApplication)
    {
        $this->Application = $Application;
        $this->CorrectionApplication = $CorrectionApplication;
    }

    /**
     * @return \Webmasterskaya\Soap\CCCB\Type\Application
     */
    public function getApplication()
    {
        return $this->Application;
    }

    /**
     * @param \Webmasterskaya\Soap\CCCB\Type\Application $Application
     * @return NewApplication
     */
    public function withApplication($Application)
    {
        $new = clone $this;
        $new->Application = $Application;

        return $new;
    }

    /**
     * @return string
     */
    public function getCorrectionApplication()
    {
        return $this->CorrectionApplication;
    }

    /**
     * @param string $CorrectionApplication
     * @return NewApplication
     */
    public function withCorrectionApplication($CorrectionApplication)
    {
        $new = clone $this;
        $new->CorrectionApplication = $CorrectionApplication;

        return $new;
    }
}

