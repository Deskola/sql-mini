<?php

namespace Deskola\SqlMini\Interfaces;

interface SelectInterface
{
    /**
     * @param string $tableName
     * @param array $columnNames
     * @param array $conditions
     * @param string|string|null $numOfRows
     * @param bool $randVal
     * @return mixed
     */
    public function getRowsInColumnsGivenCondition($tableName, array $columnNames, array $conditions, $numOfRows = '*', $randVal);

    /**
     * @param $tableName
     * @param array $columnNames
     * @param $separator
     * @param $newColumnName
     * @param array $conditions
     * @return mixed
     */
    public function concatinateColumns($tableName, array $columnNames, $separator, $newColumnName, array $conditions);

    /**
     * @param $tableName
     * @param array $columnNames
     * @param array $conditionsCols
     * @return mixed
     */
    public function getRowsWithNullValues($tableName, array $columnNames, array $conditionsCols);

}