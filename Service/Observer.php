<?php


namespace ADM\QuickDevBar\Service;


use ADM\QuickDevBar\Api\ServiceInterface;

class Observer implements ServiceInterface
{

    private $observers = [];

    /**
     * @inheritDoc
     */
    public function pullData()
    {
        return $this->observers;
    }

    public function addObserver($configuration, $observer)
    {
        $data = $configuration;
        $data['event'] = $observer->getEvent()->getName();

        $key = crc32(json_encode($data));
        if (isset($this->observers[$key])) {
            $this->observers[$key]['call_number']++;
        } else {
            $data['call_number']=1;
            $this->observers[$key] = $data;
        }
    }
}
