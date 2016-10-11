<?php

namespace App\Traits;

trait General
{
    public $data = [];

    /**
     * Used to make the data to send to the view
     * @param $index
     * @param string $value
     * @return string
     */
    public function data($index, $value = '')
    {
        if (!empty($value)) {
            return $this->data[$index] = $value;
        }
        return $this->data[$index] ?? '';
    }


    /**
     * Used in order to make Title to Display on the view
     * @param string $back
     * @param string $front
     * @param string $separator
     * @return string|\Symfony\Component\Translation\TranslatorInterface
     */
    public function title($back = '', $front = '', $separator = '::')
    {
        $front = $this->makeFront($front);
        if (empty($back)) {
            return $front;
        }
        $title = $this->makeTitle($back, $front, $separator);
        return $title;
    }

    protected function makeTitle($back, $front, $separator)
    {
        return $front . ' ' . $separator . ' ' . $back;
    }

    private function makeFront($front)
    {
        return empty($front) ? trans('site.name') : ucwords($front);
    }


}
