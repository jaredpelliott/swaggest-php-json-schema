<?php

namespace Swaggest\JsonSchema;

class Context extends MagicMap
{
    public $import = true;
    /** @var DataPreProcessor */
    public $dataPreProcessor;
    /** @var RefResolver */
    public $refResolver;

    /** @var RemoteRefProvider */
    public $remoteRefProvider;

    /** @var string */
    public $propagateObjectItemClass;

    /** @var \SplObjectStorage */
    public $circularReferences;

    /** @var bool */
    public $skipValidation = false;

    /**
     * @param boolean $skipValidation
     * @return Context
     */
    public function setSkipValidation($skipValidation = true)
    {
        $this->skipValidation = $skipValidation;
        return $this;
    }


    /**
     * ProcessingOptions constructor.
     * @param RemoteRefProvider $remoteRefProvider
     */
    public function __construct(RemoteRefProvider $remoteRefProvider = null)
    {
        $this->remoteRefProvider = $remoteRefProvider;
    }

    /**
     * @return DataPreProcessor
     */
    public function getDataPreProcessor()
    {
        return $this->dataPreProcessor;
    }

    /**
     * @param DataPreProcessor $dataPreProcessor
     * @return Context
     */
    public function setDataPreProcessor($dataPreProcessor)
    {
        $this->dataPreProcessor = $dataPreProcessor;
        return $this;
    }

    /**
     * @return RemoteRefProvider
     */
    public function getRemoteRefProvider()
    {
        return $this->remoteRefProvider;
    }

    /**
     * @param RemoteRefProvider $remoteRefProvider
     * @return Context
     */
    public function setRemoteRefProvider($remoteRefProvider)
    {
        $this->remoteRefProvider = $remoteRefProvider;
        return $this;
    }


}