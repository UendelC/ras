<?php
namespace br\gov\saude\esusab\ras\cadastroindividual;

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

class CondicoesDeSaudeThrift
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'descricaoCausaInternacaoEm12Meses',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'descricaoOutraCondicao1',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'descricaoOutraCondicao2',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'descricaoOutraCondicao3',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'descricaoPlantasMedicinaisUsadas',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'doencaCardiaca',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        7 => array(
            'var' => 'doencaRespiratoria',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        8 => array(
            'var' => 'doencaRins',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::I64,
            'elem' => array(
                'type' => TType::I64,
                ),
        ),
        9 => array(
            'var' => 'maternidadeDeReferencia',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        10 => array(
            'var' => 'situacaoPeso',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        11 => array(
            'var' => 'statusEhDependenteAlcool',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        12 => array(
            'var' => 'statusEhDependenteOutrasDrogas',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        13 => array(
            'var' => 'statusEhFumante',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        14 => array(
            'var' => 'statusEhGestante',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        15 => array(
            'var' => 'statusEstaAcamado',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        16 => array(
            'var' => 'statusEstaDomiciliado',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        17 => array(
            'var' => 'statusTemDiabetes',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        18 => array(
            'var' => 'statusTemDoencaRespiratoria',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        19 => array(
            'var' => 'statusTemHanseniase',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        20 => array(
            'var' => 'statusTemHipertensaoArterial',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        21 => array(
            'var' => 'statusTemTeveCancer',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        22 => array(
            'var' => 'statusTemTeveDoencasRins',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        23 => array(
            'var' => 'statusTemTuberculose',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        24 => array(
            'var' => 'statusTeveAvcDerrame',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        25 => array(
            'var' => 'statusTeveDoencaCardiaca',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        26 => array(
            'var' => 'statusTeveInfarto',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        27 => array(
            'var' => 'statusTeveInternadoEm12Meses',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        29 => array(
            'var' => 'statusUsaOutrasPraticasIntegrativasOuComplementares',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        30 => array(
            'var' => 'statusUsaPlantaMedicinais',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        31 => array(
            'var' => 'statusDiagnosticoMental',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * @var string
     */
    public $descricaoCausaInternacaoEm12Meses = null;
    /**
     * @var string
     */
    public $descricaoOutraCondicao1 = null;
    /**
     * @var string
     */
    public $descricaoOutraCondicao2 = null;
    /**
     * @var string
     */
    public $descricaoOutraCondicao3 = null;
    /**
     * @var string
     */
    public $descricaoPlantasMedicinaisUsadas = null;
    /**
     * @var int[]
     */
    public $doencaCardiaca = null;
    /**
     * @var int[]
     */
    public $doencaRespiratoria = null;
    /**
     * @var int[]
     */
    public $doencaRins = null;
    /**
     * @var string
     */
    public $maternidadeDeReferencia = null;
    /**
     * @var int
     */
    public $situacaoPeso = null;
    /**
     * @var bool
     */
    public $statusEhDependenteAlcool = null;
    /**
     * @var bool
     */
    public $statusEhDependenteOutrasDrogas = null;
    /**
     * @var bool
     */
    public $statusEhFumante = null;
    /**
     * @var bool
     */
    public $statusEhGestante = null;
    /**
     * @var bool
     */
    public $statusEstaAcamado = null;
    /**
     * @var bool
     */
    public $statusEstaDomiciliado = null;
    /**
     * @var bool
     */
    public $statusTemDiabetes = null;
    /**
     * @var bool
     */
    public $statusTemDoencaRespiratoria = null;
    /**
     * @var bool
     */
    public $statusTemHanseniase = null;
    /**
     * @var bool
     */
    public $statusTemHipertensaoArterial = null;
    /**
     * @var bool
     */
    public $statusTemTeveCancer = null;
    /**
     * @var bool
     */
    public $statusTemTeveDoencasRins = null;
    /**
     * @var bool
     */
    public $statusTemTuberculose = null;
    /**
     * @var bool
     */
    public $statusTeveAvcDerrame = null;
    /**
     * @var bool
     */
    public $statusTeveDoencaCardiaca = null;
    /**
     * @var bool
     */
    public $statusTeveInfarto = null;
    /**
     * @var bool
     */
    public $statusTeveInternadoEm12Meses = null;
    /**
     * @var bool
     */
    public $statusUsaOutrasPraticasIntegrativasOuComplementares = null;
    /**
     * @var bool
     */
    public $statusUsaPlantaMedicinais = null;
    /**
     * @var bool
     */
    public $statusDiagnosticoMental = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['descricaoCausaInternacaoEm12Meses'])) {
                $this->descricaoCausaInternacaoEm12Meses = $vals['descricaoCausaInternacaoEm12Meses'];
            }
            if (isset($vals['descricaoOutraCondicao1'])) {
                $this->descricaoOutraCondicao1 = $vals['descricaoOutraCondicao1'];
            }
            if (isset($vals['descricaoOutraCondicao2'])) {
                $this->descricaoOutraCondicao2 = $vals['descricaoOutraCondicao2'];
            }
            if (isset($vals['descricaoOutraCondicao3'])) {
                $this->descricaoOutraCondicao3 = $vals['descricaoOutraCondicao3'];
            }
            if (isset($vals['descricaoPlantasMedicinaisUsadas'])) {
                $this->descricaoPlantasMedicinaisUsadas = $vals['descricaoPlantasMedicinaisUsadas'];
            }
            if (isset($vals['doencaCardiaca'])) {
                $this->doencaCardiaca = $vals['doencaCardiaca'];
            }
            if (isset($vals['doencaRespiratoria'])) {
                $this->doencaRespiratoria = $vals['doencaRespiratoria'];
            }
            if (isset($vals['doencaRins'])) {
                $this->doencaRins = $vals['doencaRins'];
            }
            if (isset($vals['maternidadeDeReferencia'])) {
                $this->maternidadeDeReferencia = $vals['maternidadeDeReferencia'];
            }
            if (isset($vals['situacaoPeso'])) {
                $this->situacaoPeso = $vals['situacaoPeso'];
            }
            if (isset($vals['statusEhDependenteAlcool'])) {
                $this->statusEhDependenteAlcool = $vals['statusEhDependenteAlcool'];
            }
            if (isset($vals['statusEhDependenteOutrasDrogas'])) {
                $this->statusEhDependenteOutrasDrogas = $vals['statusEhDependenteOutrasDrogas'];
            }
            if (isset($vals['statusEhFumante'])) {
                $this->statusEhFumante = $vals['statusEhFumante'];
            }
            if (isset($vals['statusEhGestante'])) {
                $this->statusEhGestante = $vals['statusEhGestante'];
            }
            if (isset($vals['statusEstaAcamado'])) {
                $this->statusEstaAcamado = $vals['statusEstaAcamado'];
            }
            if (isset($vals['statusEstaDomiciliado'])) {
                $this->statusEstaDomiciliado = $vals['statusEstaDomiciliado'];
            }
            if (isset($vals['statusTemDiabetes'])) {
                $this->statusTemDiabetes = $vals['statusTemDiabetes'];
            }
            if (isset($vals['statusTemDoencaRespiratoria'])) {
                $this->statusTemDoencaRespiratoria = $vals['statusTemDoencaRespiratoria'];
            }
            if (isset($vals['statusTemHanseniase'])) {
                $this->statusTemHanseniase = $vals['statusTemHanseniase'];
            }
            if (isset($vals['statusTemHipertensaoArterial'])) {
                $this->statusTemHipertensaoArterial = $vals['statusTemHipertensaoArterial'];
            }
            if (isset($vals['statusTemTeveCancer'])) {
                $this->statusTemTeveCancer = $vals['statusTemTeveCancer'];
            }
            if (isset($vals['statusTemTeveDoencasRins'])) {
                $this->statusTemTeveDoencasRins = $vals['statusTemTeveDoencasRins'];
            }
            if (isset($vals['statusTemTuberculose'])) {
                $this->statusTemTuberculose = $vals['statusTemTuberculose'];
            }
            if (isset($vals['statusTeveAvcDerrame'])) {
                $this->statusTeveAvcDerrame = $vals['statusTeveAvcDerrame'];
            }
            if (isset($vals['statusTeveDoencaCardiaca'])) {
                $this->statusTeveDoencaCardiaca = $vals['statusTeveDoencaCardiaca'];
            }
            if (isset($vals['statusTeveInfarto'])) {
                $this->statusTeveInfarto = $vals['statusTeveInfarto'];
            }
            if (isset($vals['statusTeveInternadoEm12Meses'])) {
                $this->statusTeveInternadoEm12Meses = $vals['statusTeveInternadoEm12Meses'];
            }
            if (isset($vals['statusUsaOutrasPraticasIntegrativasOuComplementares'])) {
                $this->statusUsaOutrasPraticasIntegrativasOuComplementares = $vals['statusUsaOutrasPraticasIntegrativasOuComplementares'];
            }
            if (isset($vals['statusUsaPlantaMedicinais'])) {
                $this->statusUsaPlantaMedicinais = $vals['statusUsaPlantaMedicinais'];
            }
            if (isset($vals['statusDiagnosticoMental'])) {
                $this->statusDiagnosticoMental = $vals['statusDiagnosticoMental'];
            }
        }
    }

    public function getName()
    {
        return 'CondicoesDeSaudeThrift';
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
                        $xfer += $input->readString($this->descricaoCausaInternacaoEm12Meses);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->descricaoOutraCondicao1);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->descricaoOutraCondicao2);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->descricaoOutraCondicao3);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->descricaoPlantasMedicinaisUsadas);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::LST) {
                        $this->doencaCardiaca = array();
                        $_size0 = 0;
                        $_etype3 = 0;
                        $xfer += $input->readListBegin($_etype3, $_size0);
                        for ($_i4 = 0; $_i4 < $_size0; ++$_i4) {
                            $elem5 = null;
                            $xfer += $input->readI64($elem5);
                            $this->doencaCardiaca []= $elem5;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::LST) {
                        $this->doencaRespiratoria = array();
                        $_size6 = 0;
                        $_etype9 = 0;
                        $xfer += $input->readListBegin($_etype9, $_size6);
                        for ($_i10 = 0; $_i10 < $_size6; ++$_i10) {
                            $elem11 = null;
                            $xfer += $input->readI64($elem11);
                            $this->doencaRespiratoria []= $elem11;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::LST) {
                        $this->doencaRins = array();
                        $_size12 = 0;
                        $_etype15 = 0;
                        $xfer += $input->readListBegin($_etype15, $_size12);
                        for ($_i16 = 0; $_i16 < $_size12; ++$_i16) {
                            $elem17 = null;
                            $xfer += $input->readI64($elem17);
                            $this->doencaRins []= $elem17;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->maternidadeDeReferencia);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->situacaoPeso);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusEhDependenteAlcool);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusEhDependenteOutrasDrogas);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusEhFumante);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 14:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusEhGestante);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 15:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusEstaAcamado);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 16:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusEstaDomiciliado);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 17:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTemDiabetes);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 18:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTemDoencaRespiratoria);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 19:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTemHanseniase);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 20:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTemHipertensaoArterial);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 21:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTemTeveCancer);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 22:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTemTeveDoencasRins);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 23:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTemTuberculose);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 24:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTeveAvcDerrame);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 25:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTeveDoencaCardiaca);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 26:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTeveInfarto);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 27:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusTeveInternadoEm12Meses);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 29:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusUsaOutrasPraticasIntegrativasOuComplementares);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 30:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusUsaPlantaMedicinais);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 31:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->statusDiagnosticoMental);
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
        $xfer += $output->writeStructBegin('CondicoesDeSaudeThrift');
        if ($this->descricaoCausaInternacaoEm12Meses !== null) {
            $xfer += $output->writeFieldBegin('descricaoCausaInternacaoEm12Meses', TType::STRING, 1);
            $xfer += $output->writeString($this->descricaoCausaInternacaoEm12Meses);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->descricaoOutraCondicao1 !== null) {
            $xfer += $output->writeFieldBegin('descricaoOutraCondicao1', TType::STRING, 2);
            $xfer += $output->writeString($this->descricaoOutraCondicao1);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->descricaoOutraCondicao2 !== null) {
            $xfer += $output->writeFieldBegin('descricaoOutraCondicao2', TType::STRING, 3);
            $xfer += $output->writeString($this->descricaoOutraCondicao2);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->descricaoOutraCondicao3 !== null) {
            $xfer += $output->writeFieldBegin('descricaoOutraCondicao3', TType::STRING, 4);
            $xfer += $output->writeString($this->descricaoOutraCondicao3);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->descricaoPlantasMedicinaisUsadas !== null) {
            $xfer += $output->writeFieldBegin('descricaoPlantasMedicinaisUsadas', TType::STRING, 5);
            $xfer += $output->writeString($this->descricaoPlantasMedicinaisUsadas);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->doencaCardiaca !== null) {
            if (!is_array($this->doencaCardiaca)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('doencaCardiaca', TType::LST, 6);
            $output->writeListBegin(TType::I64, count($this->doencaCardiaca));
            foreach ($this->doencaCardiaca as $iter18) {
                $xfer += $output->writeI64($iter18);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->doencaRespiratoria !== null) {
            if (!is_array($this->doencaRespiratoria)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('doencaRespiratoria', TType::LST, 7);
            $output->writeListBegin(TType::I64, count($this->doencaRespiratoria));
            foreach ($this->doencaRespiratoria as $iter19) {
                $xfer += $output->writeI64($iter19);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->doencaRins !== null) {
            if (!is_array($this->doencaRins)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('doencaRins', TType::LST, 8);
            $output->writeListBegin(TType::I64, count($this->doencaRins));
            foreach ($this->doencaRins as $iter20) {
                $xfer += $output->writeI64($iter20);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->maternidadeDeReferencia !== null) {
            $xfer += $output->writeFieldBegin('maternidadeDeReferencia', TType::STRING, 9);
            $xfer += $output->writeString($this->maternidadeDeReferencia);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->situacaoPeso !== null) {
            $xfer += $output->writeFieldBegin('situacaoPeso', TType::I64, 10);
            $xfer += $output->writeI64($this->situacaoPeso);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusEhDependenteAlcool !== null) {
            $xfer += $output->writeFieldBegin('statusEhDependenteAlcool', TType::BOOL, 11);
            $xfer += $output->writeBool($this->statusEhDependenteAlcool);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusEhDependenteOutrasDrogas !== null) {
            $xfer += $output->writeFieldBegin('statusEhDependenteOutrasDrogas', TType::BOOL, 12);
            $xfer += $output->writeBool($this->statusEhDependenteOutrasDrogas);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusEhFumante !== null) {
            $xfer += $output->writeFieldBegin('statusEhFumante', TType::BOOL, 13);
            $xfer += $output->writeBool($this->statusEhFumante);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusEhGestante !== null) {
            $xfer += $output->writeFieldBegin('statusEhGestante', TType::BOOL, 14);
            $xfer += $output->writeBool($this->statusEhGestante);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusEstaAcamado !== null) {
            $xfer += $output->writeFieldBegin('statusEstaAcamado', TType::BOOL, 15);
            $xfer += $output->writeBool($this->statusEstaAcamado);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusEstaDomiciliado !== null) {
            $xfer += $output->writeFieldBegin('statusEstaDomiciliado', TType::BOOL, 16);
            $xfer += $output->writeBool($this->statusEstaDomiciliado);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTemDiabetes !== null) {
            $xfer += $output->writeFieldBegin('statusTemDiabetes', TType::BOOL, 17);
            $xfer += $output->writeBool($this->statusTemDiabetes);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTemDoencaRespiratoria !== null) {
            $xfer += $output->writeFieldBegin('statusTemDoencaRespiratoria', TType::BOOL, 18);
            $xfer += $output->writeBool($this->statusTemDoencaRespiratoria);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTemHanseniase !== null) {
            $xfer += $output->writeFieldBegin('statusTemHanseniase', TType::BOOL, 19);
            $xfer += $output->writeBool($this->statusTemHanseniase);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTemHipertensaoArterial !== null) {
            $xfer += $output->writeFieldBegin('statusTemHipertensaoArterial', TType::BOOL, 20);
            $xfer += $output->writeBool($this->statusTemHipertensaoArterial);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTemTeveCancer !== null) {
            $xfer += $output->writeFieldBegin('statusTemTeveCancer', TType::BOOL, 21);
            $xfer += $output->writeBool($this->statusTemTeveCancer);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTemTeveDoencasRins !== null) {
            $xfer += $output->writeFieldBegin('statusTemTeveDoencasRins', TType::BOOL, 22);
            $xfer += $output->writeBool($this->statusTemTeveDoencasRins);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTemTuberculose !== null) {
            $xfer += $output->writeFieldBegin('statusTemTuberculose', TType::BOOL, 23);
            $xfer += $output->writeBool($this->statusTemTuberculose);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTeveAvcDerrame !== null) {
            $xfer += $output->writeFieldBegin('statusTeveAvcDerrame', TType::BOOL, 24);
            $xfer += $output->writeBool($this->statusTeveAvcDerrame);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTeveDoencaCardiaca !== null) {
            $xfer += $output->writeFieldBegin('statusTeveDoencaCardiaca', TType::BOOL, 25);
            $xfer += $output->writeBool($this->statusTeveDoencaCardiaca);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTeveInfarto !== null) {
            $xfer += $output->writeFieldBegin('statusTeveInfarto', TType::BOOL, 26);
            $xfer += $output->writeBool($this->statusTeveInfarto);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusTeveInternadoEm12Meses !== null) {
            $xfer += $output->writeFieldBegin('statusTeveInternadoEm12Meses', TType::BOOL, 27);
            $xfer += $output->writeBool($this->statusTeveInternadoEm12Meses);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusUsaOutrasPraticasIntegrativasOuComplementares !== null) {
            $xfer += $output->writeFieldBegin('statusUsaOutrasPraticasIntegrativasOuComplementares', TType::BOOL, 29);
            $xfer += $output->writeBool($this->statusUsaOutrasPraticasIntegrativasOuComplementares);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusUsaPlantaMedicinais !== null) {
            $xfer += $output->writeFieldBegin('statusUsaPlantaMedicinais', TType::BOOL, 30);
            $xfer += $output->writeBool($this->statusUsaPlantaMedicinais);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->statusDiagnosticoMental !== null) {
            $xfer += $output->writeFieldBegin('statusDiagnosticoMental', TType::BOOL, 31);
            $xfer += $output->writeBool($this->statusDiagnosticoMental);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}