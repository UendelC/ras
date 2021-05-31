<?php
namespace br\gov\saude\esusab\ras\visitadomiciliar;

/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class FichaVisitaDomiciliarMasterThrift
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'uuidFicha',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'tpCdsOrigem',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        3 => array(
            'var' => 'headerTransport',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\br\gov\saude\esusab\ras\common\UnicaLotacaoHeaderThrift',
        ),
        4 => array(
            'var' => 'visitasDomiciliares',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\br\gov\saude\esusab\ras\visitadomiciliar\FichaVisitaDomiciliarChildThrift',
                ),
        ),
    );

    /**
     * @var string
     */
    public $uuidFicha = null;
    /**
     * @var int
     */
    public $tpCdsOrigem = null;
    /**
     * @var \br\gov\saude\esusab\ras\common\UnicaLotacaoHeaderThrift
     */
    public $headerTransport = null;
    /**
     * @var \br\gov\saude\esusab\ras\visitadomiciliar\FichaVisitaDomiciliarChildThrift[]
     */
    public $visitasDomiciliares = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['uuidFicha'])) {
                $this->uuidFicha = $vals['uuidFicha'];
            }
            if (isset($vals['tpCdsOrigem'])) {
                $this->tpCdsOrigem = $vals['tpCdsOrigem'];
            }
            if (isset($vals['headerTransport'])) {
                $this->headerTransport = $vals['headerTransport'];
            }
            if (isset($vals['visitasDomiciliares'])) {
                $this->visitasDomiciliares = $vals['visitasDomiciliares'];
            }
        }
    }

    public function getName()
    {
        return 'FichaVisitaDomiciliarMasterThrift';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->uuidFicha);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->tpCdsOrigem);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->headerTransport = new \br\gov\saude\esusab\ras\common\UnicaLotacaoHeaderThrift();
                        $xfer += $this->headerTransport->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::LST) {
                        $this->visitasDomiciliares = array();
                        $_size7 = 0;
                        $_etype10 = 0;
                        $xfer += $input->readListBegin($_etype10, $_size7);
                        for ($_i11 = 0; $_i11 < $_size7; ++$_i11) {
                            $elem12 = null;
                            $elem12 = new \br\gov\saude\esusab\ras\visitadomiciliar\FichaVisitaDomiciliarChildThrift();
                            $xfer += $elem12->read($input);
                            $this->visitasDomiciliares []= $elem12;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('FichaVisitaDomiciliarMasterThrift');
        if ($this->uuidFicha !== null) {
            $xfer += $output->writeFieldBegin('uuidFicha', TType::STRING, 1);
            $xfer += $output->writeString($this->uuidFicha);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tpCdsOrigem !== null) {
            $xfer += $output->writeFieldBegin('tpCdsOrigem', TType::I32, 2);
            $xfer += $output->writeI32($this->tpCdsOrigem);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->headerTransport !== null) {
            if (!is_object($this->headerTransport)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('headerTransport', TType::STRUCT, 3);
            $xfer += $this->headerTransport->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->visitasDomiciliares !== null) {
            if (!is_array($this->visitasDomiciliares)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('visitasDomiciliares', TType::LST, 4);
            $output->writeListBegin(TType::STRUCT, count($this->visitasDomiciliares));
            foreach ($this->visitasDomiciliares as $iter13) {
                $xfer += $iter13->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
