<?php

    namespace app;

    class bruteForceAmatureLeague
    {
        private $elements;
        private $result;

        /**
         * bruteForceAmatureLeague constructor.
         * @param string $str
         */
        public function __construct(string $str)
        {
            $this->setElements(str_split(preg_replace('/[^a-z]/', '', $str), 1));
            $parents = $this->getElements();
            foreach ($parents as $key => $element) {
                $arr[] = $this->getPermutations($parents, $key);
            }
            $arr[] = $this->stringifyArray(end($arr));
            $this->setResult($arr);

            return $this->getResult();

        }

        /**
         * @param array $elements
         * @param int $position
         * @return array
         */
        private function getPermutations(array $elements, int $position)
        {
            foreach ($elements as $key => $item) {
                if ($key == $position) {
                    $next = null;
                    if (isset($elements[$key + 1])) {
                        $next = $elements[$key + 1];
                    }
                    $data[] = $elements[$position].$next;
                } else {
                    if ($key != $position && $key != $position + 1) {
                        $data[] = $item;
                    }
                }
            }

            return $data;
        }

        /**
         * @param array $data
         * @return array
         */
        private function stringifyArray(array $data)
        {
            $string = '';
            foreach ($data as $item) {
                $string .= $item;
            }

            return [$string];
        }

        /**
         * @return array
         */
        private function getElements(): array
        {
            return $this->elements;
        }

        /**
         * @param array $elements
         */
        private function setElements(array $elements): void
        {
            $this->elements = $elements;
        }

        /**
         * @return mixed
         */
        public function getResult()
        {
            return $this->result;
        }

        /**
         * @param mixed $result
         */
        private function setResult($result): void
        {
            $this->result = $result;
        }


    }
