<?php
namespace br\gov\saude\esusab\ras\atenddomiciliar;

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

class FichaAtendimentoDomiciliarChildThrift
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'turno',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'cnsCidadao',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'dataNascimento',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        4 => array(
            'var' => 'sexo',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        5 => array(
            'var' => 'localAtendimento',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        6 => array(
            'var' => 'atencaoDomiciliarModalidade',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        7 => array(
            'var' => 'tipoAtendimento',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        8 => array(
            'var' => 'condicoesAvaliadas',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        9 => array(
            'var' => 'cid',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        10 => array(
            'var' => 'ciap',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        11 => array(
            'var' => 'procedimentos',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRING,
            'elem' => array(
                'type' => TType::STRING,
                ),
        ),
        13 => array(
            'var' => 'condutaDesfecho',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        15 => array(
            'var' => 'cpfCidadao',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $turno = null;
    /**
     * @var string
     */
    public $cnsCidadao = null;
    /**
     * @var int
     */
    public $dataNascimento = null;
    /**
     * @var int
     */
    public $sexo = null;
    /**
     * @var int
     */
    public $localAtendimento = null;
    /**
     * @var int
     */
    public $atencaoDomiciliarModalidade = null;
    /**
     * @var int
     */
    public $tipoAtendimento = null;
    /**
     * @var int[]
     */
    public $condicoesAvaliadas = null;
    /**
     * @var string
     */
    public $cid = null;
    /**
     * @var string
     */
    public $ciap = null;
    /**
     * @var string[]
     */
    public $procedimentos = null;
    /**
     * @var int
     */
    public $condutaDesfecho = null;
    /**
     * @var string
     */
    public $cpfCidadao = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['turno'])) {
                $this->turno = $vals['turno'];
            }
            if (isset($vals['cnsCidadao'])) {
                $this->cnsCidadao = $vals['cnsCidadao'];
            }
            if (isset($vals['dataNascimento'])) {
                $this->dataNascimento = $vals['dataNascimento'];
            }
            if (isset($vals['sexo'])) {
                $this->sexo = $vals['sexo'];
            }
            if (isset($vals['localAtendimento'])) {
                $this->localAtendimento = $vals['localAtendimento'];
            }
            if (isset($vals['atencaoDomiciliarModalidade'])) {
                $this->atencaoDomiciliarModalidade = $vals['atencaoDomiciliarModalidade'];
            }
            if (isset($vals['tipoAtendimento'])) {
                $this->tipoAtendimento = $vals['tipoAtendimento'];
            }
            if (isset($vals['condicoesAvaliadas'])) {
                $this->condicoesAvaliadas = $vals['condicoesAvaliadas'];
            }
            if (isset($vals['cid'])) {
                $this->cid = $vals['cid'];
            }
            if (isset($vals['ciap'])) {
                $this->ciap = $vals['ciap'];
            }
            if (isset($vals['procedimentos'])) {
                $this->procedimentos = $vals['procedimentos'];
            }
            if (isset($vals['condutaDesfecho'])) {
                $this->condutaDesfecho = $vals['condutaDesfecho'];
            }
            if (isset($vals['cpfCidadao'])) {
                $this->cpfCidadao = $vals['cpfCidadao'];
            }
        }
    }

    public function getName()
    {
        return 'FichaAtendimentoDomiciliarChildThrift';
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
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->turno);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->cnsCidadao);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->dataNascimento);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->sexo);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->localAtendimento);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->atencaoDomiciliarModalidade);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->tipoAtendimento);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::LST) {
                        $this->condicoesAvaliadas = array();
                        $_size0 = 0;
                        $_etype3 = 0;
                        $xfer += $input->readListBegin($_etype3, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
                            $elem5 = null;
                            $xfer += $input->readI64($elem5);
                            $this->condicoesAvaliadas []= $elem5;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->cid);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->ciap);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::LST) {
                        $this->procedimentos = array();
                        $_size6 = 0;
                        $_etype9 = 0;
                        $xfer += $input->readListBegin($_etype9, $_size6);
                        for ($_i10 = 0; $_i10 < $_size6; ++$_i10) {
                            $elem11 = null;
                            $xfer += $input->readString($elem11);
                            $this->procedimentos []= $elem11;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->condutaDesfecho);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 15:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->cpfCidadao);
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
        $xfer += $output->writeStructBegin('FichaAtendimentoDomiciliarChildThrift');
        if ($this->turno !== null) {
            $xfer += $output->writeFieldBegin('turno', TType::I64, 1);
            $xfer += $output->writeI64($this->turno);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->cnsCidadao !== null) {
            $xfer += $output->writeFieldBegin('cnsCidadao', TType::STRING, 2);
            $xfer += $output->writeString($this->cnsCidadao);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dataNascimento !== null) {
            $xfer += $output->writeFieldBegin('dataNascimento', TType::I64, 3);
            $xfer += $output->writeI64($this->dataNascimento);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->sexo !== null) {
            $xfer += $output->writeFieldBegin('sexo', TType::I64, 4);
            $xfer += $output->writeI64($this->sexo);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->localAtendimento !== null) {
            $xfer += $output->writeFieldBegin('localAtendimento', TType::I64, 5);
            $xfer += $output->writeI64($this->localAtendimento);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->atencaoDomiciliarModalidade !== null) {
            $xfer += $output->writeFieldBegin('atencaoDomiciliarModalidade', TType::I64, 6);
            $xfer += $output->writeI64($this->atencaoDomiciliarModalidade);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tipoAtendimento !== null) {
            $xfer += $output->writeFieldBegin('tipoAtendimento', TType::I64, 7);
            $xfer += $output->writeI64($this->tipoAtendimento);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->condicoesAvaliadas !== null) {
            if (!is_array($this->condicoesAvaliadas)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('condicoesAvaliadas', TType::LST, 8);
            $output->writeListBegin(TType::I64, count($this->condicoesAvaliadas));
            foreach ($this->condicoesAvaliadas as $iter12) {
                $xfer += $output->writeI64($iter12);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->cid !== null) {
            $xfer += $output->writeFieldBegin('cid', TType::STRING, 9);
            $xfer += $output->writeString($this->cid);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->ciap !== null) {
            $xfer += $output->writeFieldBegin('ciap', TType::STRING, 10);
            $xfer += $output->writeString($this->ciap);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->procedimentos !== null) {
            if (!is_array($this->procedimentos)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('procedimentos', TType::LST, 11);
            $output->writeListBegin(TType::STRING, count($this->procedimentos));
            foreach ($this->procedimentos as $iter13) {
                $xfer += $output->writeString($iter13);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->condutaDesfecho !== null) {
            $xfer += $output->writeFieldBegin('condutaDesfecho', TType::I64, 13);
            $xfer += $output->writeI64($this->condutaDesfecho);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->cpfCidadao !== null) {
            $xfer += $output->writeFieldBegin('cpfCidadao', TType::STRING, 15);
            $xfer += $output->writeString($this->cpfCidadao);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
