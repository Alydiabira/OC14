<?php declare(strict_types=1);

namespace PhpParser\Parser;

use PhpParser\Error;
use PhpParser\Modifiers;
use PhpParser\Node;
use PhpParser\Node\Expr;
use PhpParser\Node\Name;
use PhpParser\Node\Scalar;
use PhpParser\Node\Stmt;

/* This is an automatically GENERATED file, which should not be manually edited.
 * Instead edit one of the following:
 *  * the grammar file grammar/php.y
 *  * the skeleton file grammar/parser.template
 *  * the preprocessing script grammar/rebuildParsers.php
 */
class Php8 extends \PhpParser\ParserAbstract
{
    public const YYERRTOK = 256;
<<<<<<< HEAD
    public const T_THROW = 257;
    public const T_INCLUDE = 258;
    public const T_INCLUDE_ONCE = 259;
    public const T_EVAL = 260;
    public const T_REQUIRE = 261;
    public const T_REQUIRE_ONCE = 262;
    public const T_LOGICAL_OR = 263;
    public const T_LOGICAL_XOR = 264;
    public const T_LOGICAL_AND = 265;
    public const T_PRINT = 266;
    public const T_YIELD = 267;
    public const T_DOUBLE_ARROW = 268;
    public const T_YIELD_FROM = 269;
    public const T_PLUS_EQUAL = 270;
    public const T_MINUS_EQUAL = 271;
    public const T_MUL_EQUAL = 272;
    public const T_DIV_EQUAL = 273;
    public const T_CONCAT_EQUAL = 274;
    public const T_MOD_EQUAL = 275;
    public const T_AND_EQUAL = 276;
    public const T_OR_EQUAL = 277;
    public const T_XOR_EQUAL = 278;
    public const T_SL_EQUAL = 279;
    public const T_SR_EQUAL = 280;
    public const T_POW_EQUAL = 281;
    public const T_COALESCE_EQUAL = 282;
    public const T_COALESCE = 283;
    public const T_BOOLEAN_OR = 284;
    public const T_BOOLEAN_AND = 285;
    public const T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG = 286;
    public const T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG = 287;
    public const T_IS_EQUAL = 288;
    public const T_IS_NOT_EQUAL = 289;
    public const T_IS_IDENTICAL = 290;
    public const T_IS_NOT_IDENTICAL = 291;
    public const T_SPACESHIP = 292;
    public const T_IS_SMALLER_OR_EQUAL = 293;
    public const T_IS_GREATER_OR_EQUAL = 294;
    public const T_SL = 295;
    public const T_SR = 296;
    public const T_INSTANCEOF = 297;
    public const T_INC = 298;
    public const T_DEC = 299;
    public const T_INT_CAST = 300;
    public const T_DOUBLE_CAST = 301;
    public const T_STRING_CAST = 302;
    public const T_ARRAY_CAST = 303;
    public const T_OBJECT_CAST = 304;
    public const T_BOOL_CAST = 305;
    public const T_UNSET_CAST = 306;
    public const T_POW = 307;
    public const T_NEW = 308;
    public const T_CLONE = 309;
    public const T_EXIT = 310;
    public const T_IF = 311;
    public const T_ELSEIF = 312;
    public const T_ELSE = 313;
    public const T_ENDIF = 314;
    public const T_LNUMBER = 315;
    public const T_DNUMBER = 316;
    public const T_STRING = 317;
    public const T_STRING_VARNAME = 318;
    public const T_VARIABLE = 319;
    public const T_NUM_STRING = 320;
    public const T_INLINE_HTML = 321;
    public const T_ENCAPSED_AND_WHITESPACE = 322;
    public const T_CONSTANT_ENCAPSED_STRING = 323;
    public const T_ECHO = 324;
    public const T_DO = 325;
    public const T_WHILE = 326;
    public const T_ENDWHILE = 327;
    public const T_FOR = 328;
    public const T_ENDFOR = 329;
    public const T_FOREACH = 330;
    public const T_ENDFOREACH = 331;
    public const T_DECLARE = 332;
    public const T_ENDDECLARE = 333;
    public const T_AS = 334;
    public const T_SWITCH = 335;
    public const T_MATCH = 336;
    public const T_ENDSWITCH = 337;
    public const T_CASE = 338;
    public const T_DEFAULT = 339;
    public const T_BREAK = 340;
    public const T_CONTINUE = 341;
    public const T_GOTO = 342;
    public const T_FUNCTION = 343;
    public const T_FN = 344;
    public const T_CONST = 345;
    public const T_RETURN = 346;
    public const T_TRY = 347;
    public const T_CATCH = 348;
    public const T_FINALLY = 349;
    public const T_USE = 350;
    public const T_INSTEADOF = 351;
    public const T_GLOBAL = 352;
    public const T_STATIC = 353;
    public const T_ABSTRACT = 354;
    public const T_FINAL = 355;
    public const T_PRIVATE = 356;
    public const T_PROTECTED = 357;
    public const T_PUBLIC = 358;
    public const T_READONLY = 359;
    public const T_VAR = 360;
    public const T_UNSET = 361;
    public const T_ISSET = 362;
    public const T_EMPTY = 363;
    public const T_HALT_COMPILER = 364;
    public const T_CLASS = 365;
    public const T_TRAIT = 366;
    public const T_INTERFACE = 367;
    public const T_ENUM = 368;
    public const T_EXTENDS = 369;
    public const T_IMPLEMENTS = 370;
    public const T_OBJECT_OPERATOR = 371;
    public const T_NULLSAFE_OBJECT_OPERATOR = 372;
    public const T_LIST = 373;
    public const T_ARRAY = 374;
    public const T_CALLABLE = 375;
    public const T_CLASS_C = 376;
    public const T_TRAIT_C = 377;
    public const T_METHOD_C = 378;
    public const T_FUNC_C = 379;
    public const T_LINE = 380;
    public const T_FILE = 381;
    public const T_START_HEREDOC = 382;
    public const T_END_HEREDOC = 383;
    public const T_DOLLAR_OPEN_CURLY_BRACES = 384;
    public const T_CURLY_OPEN = 385;
    public const T_PAAMAYIM_NEKUDOTAYIM = 386;
    public const T_NAMESPACE = 387;
    public const T_NS_C = 388;
    public const T_DIR = 389;
    public const T_NS_SEPARATOR = 390;
    public const T_ELLIPSIS = 391;
    public const T_NAME_FULLY_QUALIFIED = 392;
    public const T_NAME_QUALIFIED = 393;
    public const T_NAME_RELATIVE = 394;
    public const T_ATTRIBUTE = 395;

    protected int $tokenToSymbolMapSize = 396;
    protected int $actionTableSize = 1257;
    protected int $gotoTableSize = 657;

    protected int $invalidSymbol = 168;
=======
    public const T_VOID_CAST = 257;
    public const T_THROW = 258;
    public const T_INCLUDE = 259;
    public const T_INCLUDE_ONCE = 260;
    public const T_EVAL = 261;
    public const T_REQUIRE = 262;
    public const T_REQUIRE_ONCE = 263;
    public const T_LOGICAL_OR = 264;
    public const T_LOGICAL_XOR = 265;
    public const T_LOGICAL_AND = 266;
    public const T_PRINT = 267;
    public const T_YIELD = 268;
    public const T_DOUBLE_ARROW = 269;
    public const T_YIELD_FROM = 270;
    public const T_PLUS_EQUAL = 271;
    public const T_MINUS_EQUAL = 272;
    public const T_MUL_EQUAL = 273;
    public const T_DIV_EQUAL = 274;
    public const T_CONCAT_EQUAL = 275;
    public const T_MOD_EQUAL = 276;
    public const T_AND_EQUAL = 277;
    public const T_OR_EQUAL = 278;
    public const T_XOR_EQUAL = 279;
    public const T_SL_EQUAL = 280;
    public const T_SR_EQUAL = 281;
    public const T_POW_EQUAL = 282;
    public const T_COALESCE_EQUAL = 283;
    public const T_COALESCE = 284;
    public const T_BOOLEAN_OR = 285;
    public const T_BOOLEAN_AND = 286;
    public const T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG = 287;
    public const T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG = 288;
    public const T_IS_EQUAL = 289;
    public const T_IS_NOT_EQUAL = 290;
    public const T_IS_IDENTICAL = 291;
    public const T_IS_NOT_IDENTICAL = 292;
    public const T_SPACESHIP = 293;
    public const T_IS_SMALLER_OR_EQUAL = 294;
    public const T_IS_GREATER_OR_EQUAL = 295;
    public const T_PIPE = 296;
    public const T_SL = 297;
    public const T_SR = 298;
    public const T_INSTANCEOF = 299;
    public const T_INC = 300;
    public const T_DEC = 301;
    public const T_INT_CAST = 302;
    public const T_DOUBLE_CAST = 303;
    public const T_STRING_CAST = 304;
    public const T_ARRAY_CAST = 305;
    public const T_OBJECT_CAST = 306;
    public const T_BOOL_CAST = 307;
    public const T_UNSET_CAST = 308;
    public const T_POW = 309;
    public const T_NEW = 310;
    public const T_CLONE = 311;
    public const T_EXIT = 312;
    public const T_IF = 313;
    public const T_ELSEIF = 314;
    public const T_ELSE = 315;
    public const T_ENDIF = 316;
    public const T_LNUMBER = 317;
    public const T_DNUMBER = 318;
    public const T_STRING = 319;
    public const T_STRING_VARNAME = 320;
    public const T_VARIABLE = 321;
    public const T_NUM_STRING = 322;
    public const T_INLINE_HTML = 323;
    public const T_ENCAPSED_AND_WHITESPACE = 324;
    public const T_CONSTANT_ENCAPSED_STRING = 325;
    public const T_ECHO = 326;
    public const T_DO = 327;
    public const T_WHILE = 328;
    public const T_ENDWHILE = 329;
    public const T_FOR = 330;
    public const T_ENDFOR = 331;
    public const T_FOREACH = 332;
    public const T_ENDFOREACH = 333;
    public const T_DECLARE = 334;
    public const T_ENDDECLARE = 335;
    public const T_AS = 336;
    public const T_SWITCH = 337;
    public const T_MATCH = 338;
    public const T_ENDSWITCH = 339;
    public const T_CASE = 340;
    public const T_DEFAULT = 341;
    public const T_BREAK = 342;
    public const T_CONTINUE = 343;
    public const T_GOTO = 344;
    public const T_FUNCTION = 345;
    public const T_FN = 346;
    public const T_CONST = 347;
    public const T_RETURN = 348;
    public const T_TRY = 349;
    public const T_CATCH = 350;
    public const T_FINALLY = 351;
    public const T_USE = 352;
    public const T_INSTEADOF = 353;
    public const T_GLOBAL = 354;
    public const T_STATIC = 355;
    public const T_ABSTRACT = 356;
    public const T_FINAL = 357;
    public const T_PRIVATE = 358;
    public const T_PROTECTED = 359;
    public const T_PUBLIC = 360;
    public const T_READONLY = 361;
    public const T_PUBLIC_SET = 362;
    public const T_PROTECTED_SET = 363;
    public const T_PRIVATE_SET = 364;
    public const T_VAR = 365;
    public const T_UNSET = 366;
    public const T_ISSET = 367;
    public const T_EMPTY = 368;
    public const T_HALT_COMPILER = 369;
    public const T_CLASS = 370;
    public const T_TRAIT = 371;
    public const T_INTERFACE = 372;
    public const T_ENUM = 373;
    public const T_EXTENDS = 374;
    public const T_IMPLEMENTS = 375;
    public const T_OBJECT_OPERATOR = 376;
    public const T_NULLSAFE_OBJECT_OPERATOR = 377;
    public const T_LIST = 378;
    public const T_ARRAY = 379;
    public const T_CALLABLE = 380;
    public const T_CLASS_C = 381;
    public const T_TRAIT_C = 382;
    public const T_METHOD_C = 383;
    public const T_FUNC_C = 384;
    public const T_PROPERTY_C = 385;
    public const T_LINE = 386;
    public const T_FILE = 387;
    public const T_START_HEREDOC = 388;
    public const T_END_HEREDOC = 389;
    public const T_DOLLAR_OPEN_CURLY_BRACES = 390;
    public const T_CURLY_OPEN = 391;
    public const T_PAAMAYIM_NEKUDOTAYIM = 392;
    public const T_NAMESPACE = 393;
    public const T_NS_C = 394;
    public const T_DIR = 395;
    public const T_NS_SEPARATOR = 396;
    public const T_ELLIPSIS = 397;
    public const T_NAME_FULLY_QUALIFIED = 398;
    public const T_NAME_QUALIFIED = 399;
    public const T_NAME_RELATIVE = 400;
    public const T_ATTRIBUTE = 401;

    protected int $tokenToSymbolMapSize = 402;
    protected int $actionTableSize = 1537;
    protected int $gotoTableSize = 642;

    protected int $invalidSymbol = 174;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    protected int $errorSymbol = 1;
    protected int $defaultAction = -32766;
    protected int $unexpectedTokenRule = 32767;

<<<<<<< HEAD
    protected int $YY2TBLSTATE = 435;
    protected int $numNonLeafStates = 739;
=======
    protected int $YY2TBLSTATE = 452;
    protected int $numNonLeafStates = 767;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

    protected array $symbolToName = array(
        "EOF",
        "error",
<<<<<<< HEAD
=======
        "T_VOID_CAST",
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        "T_THROW",
        "T_INCLUDE",
        "T_INCLUDE_ONCE",
        "T_EVAL",
        "T_REQUIRE",
        "T_REQUIRE_ONCE",
        "','",
        "T_LOGICAL_OR",
        "T_LOGICAL_XOR",
        "T_LOGICAL_AND",
        "T_PRINT",
        "T_YIELD",
        "T_DOUBLE_ARROW",
        "T_YIELD_FROM",
        "'='",
        "T_PLUS_EQUAL",
        "T_MINUS_EQUAL",
        "T_MUL_EQUAL",
        "T_DIV_EQUAL",
        "T_CONCAT_EQUAL",
        "T_MOD_EQUAL",
        "T_AND_EQUAL",
        "T_OR_EQUAL",
        "T_XOR_EQUAL",
        "T_SL_EQUAL",
        "T_SR_EQUAL",
        "T_POW_EQUAL",
        "T_COALESCE_EQUAL",
        "'?'",
        "':'",
        "T_COALESCE",
        "T_BOOLEAN_OR",
        "T_BOOLEAN_AND",
        "'|'",
        "'^'",
        "T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG",
        "T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG",
        "T_IS_EQUAL",
        "T_IS_NOT_EQUAL",
        "T_IS_IDENTICAL",
        "T_IS_NOT_IDENTICAL",
        "T_SPACESHIP",
        "'<'",
        "T_IS_SMALLER_OR_EQUAL",
        "'>'",
        "T_IS_GREATER_OR_EQUAL",
<<<<<<< HEAD
=======
        "T_PIPE",
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        "'.'",
        "T_SL",
        "T_SR",
        "'+'",
        "'-'",
        "'*'",
        "'/'",
        "'%'",
        "'!'",
        "T_INSTANCEOF",
        "'~'",
        "T_INC",
        "T_DEC",
        "T_INT_CAST",
        "T_DOUBLE_CAST",
        "T_STRING_CAST",
        "T_ARRAY_CAST",
        "T_OBJECT_CAST",
        "T_BOOL_CAST",
        "T_UNSET_CAST",
        "'@'",
        "T_POW",
        "'['",
        "T_NEW",
        "T_CLONE",
        "T_EXIT",
        "T_IF",
        "T_ELSEIF",
        "T_ELSE",
        "T_ENDIF",
        "T_LNUMBER",
        "T_DNUMBER",
        "T_STRING",
        "T_STRING_VARNAME",
        "T_VARIABLE",
        "T_NUM_STRING",
        "T_INLINE_HTML",
        "T_ENCAPSED_AND_WHITESPACE",
        "T_CONSTANT_ENCAPSED_STRING",
        "T_ECHO",
        "T_DO",
        "T_WHILE",
        "T_ENDWHILE",
        "T_FOR",
        "T_ENDFOR",
        "T_FOREACH",
        "T_ENDFOREACH",
        "T_DECLARE",
        "T_ENDDECLARE",
        "T_AS",
        "T_SWITCH",
        "T_MATCH",
        "T_ENDSWITCH",
        "T_CASE",
        "T_DEFAULT",
        "T_BREAK",
        "T_CONTINUE",
        "T_GOTO",
        "T_FUNCTION",
        "T_FN",
        "T_CONST",
        "T_RETURN",
        "T_TRY",
        "T_CATCH",
        "T_FINALLY",
        "T_USE",
        "T_INSTEADOF",
        "T_GLOBAL",
        "T_STATIC",
        "T_ABSTRACT",
        "T_FINAL",
        "T_PRIVATE",
        "T_PROTECTED",
        "T_PUBLIC",
        "T_READONLY",
<<<<<<< HEAD
=======
        "T_PUBLIC_SET",
        "T_PROTECTED_SET",
        "T_PRIVATE_SET",
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        "T_VAR",
        "T_UNSET",
        "T_ISSET",
        "T_EMPTY",
        "T_HALT_COMPILER",
        "T_CLASS",
        "T_TRAIT",
        "T_INTERFACE",
        "T_ENUM",
        "T_EXTENDS",
        "T_IMPLEMENTS",
        "T_OBJECT_OPERATOR",
        "T_NULLSAFE_OBJECT_OPERATOR",
        "T_LIST",
        "T_ARRAY",
        "T_CALLABLE",
        "T_CLASS_C",
        "T_TRAIT_C",
        "T_METHOD_C",
        "T_FUNC_C",
<<<<<<< HEAD
=======
        "T_PROPERTY_C",
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        "T_LINE",
        "T_FILE",
        "T_START_HEREDOC",
        "T_END_HEREDOC",
        "T_DOLLAR_OPEN_CURLY_BRACES",
        "T_CURLY_OPEN",
        "T_PAAMAYIM_NEKUDOTAYIM",
        "T_NAMESPACE",
        "T_NS_C",
        "T_DIR",
        "T_NS_SEPARATOR",
        "T_ELLIPSIS",
        "T_NAME_FULLY_QUALIFIED",
        "T_NAME_QUALIFIED",
        "T_NAME_RELATIVE",
        "T_ATTRIBUTE",
        "';'",
        "']'",
        "'('",
        "')'",
        "'{'",
        "'}'",
        "'`'",
        "'\"'",
        "'$'"
    );

    protected array $tokenToSymbol = array(
<<<<<<< HEAD
            0,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,   56,  166,  168,  167,   55,  168,  168,
          161,  162,   53,   51,    8,   52,   48,   54,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,   31,  159,
           44,   16,   46,   30,   68,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,   70,  168,  160,   36,  168,  165,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  163,   35,  164,   58,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,  168,  168,  168,  168,
          168,  168,  168,  168,  168,  168,    1,    2,    3,    4,
            5,    6,    7,    9,   10,   11,   12,   13,   14,   15,
           17,   18,   19,   20,   21,   22,   23,   24,   25,   26,
           27,   28,   29,   32,   33,   34,   37,   38,   39,   40,
           41,   42,   43,   45,   47,   49,   50,   57,   59,   60,
           61,   62,   63,   64,   65,   66,   67,   69,   71,   72,
=======
            0,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,   58,  172,  174,  173,   57,  174,  174,
          167,  168,   55,   53,    9,   54,   50,   56,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,   32,  165,
           45,   17,   47,   31,   70,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,   72,  174,  166,   37,  174,  171,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  169,   36,  170,   60,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,  174,  174,  174,  174,
          174,  174,  174,  174,  174,  174,    1,    2,    3,    4,
            5,    6,    7,    8,   10,   11,   12,   13,   14,   15,
           16,   18,   19,   20,   21,   22,   23,   24,   25,   26,
           27,   28,   29,   30,   33,   34,   35,   38,   39,   40,
           41,   42,   43,   44,   46,   48,   49,   51,   52,   59,
           61,   62,   63,   64,   65,   66,   67,   68,   69,   71,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
           73,   74,   75,   76,   77,   78,   79,   80,   81,   82,
           83,   84,   85,   86,   87,   88,   89,   90,   91,   92,
           93,   94,   95,   96,   97,   98,   99,  100,  101,  102,
          103,  104,  105,  106,  107,  108,  109,  110,  111,  112,
          113,  114,  115,  116,  117,  118,  119,  120,  121,  122,
          123,  124,  125,  126,  127,  128,  129,  130,  131,  132,
          133,  134,  135,  136,  137,  138,  139,  140,  141,  142,
          143,  144,  145,  146,  147,  148,  149,  150,  151,  152,
<<<<<<< HEAD
          153,  154,  155,  156,  157,  158
    );

    protected array $action = array(
          133,  134,  135,  582,  136,  137,    0,  751,  752,  753,
          138,   38,  327,-32766,-32766,-32766,-32766,-32766,-32766,  837,
          826,-32767,-32767,-32767,-32767,  102,  103,  104, 1112, 1113,
         1114, 1111, 1110, 1109, 1115,  745,  744,-32766, 1027,-32766,
        -32766,-32766,-32766,-32766,-32766,-32766,-32767,-32767,-32767,-32767,
        -32767, 1245,-32766,-32766, 1322,  754, 1112, 1113, 1114, 1111,
         1110, 1109, 1115,  459,  460,  461,    2,  990, 1306,  265,
          139,  404,  758,  759,  760,  761,  467,  468,  429,  835,
          606,  -16, 1341,   23,  292,  815,  762,  763,  764,  765,
          766,  767,  768,  769,  770,  771,  791,  583,  792,  793,
          794,  795,  783,  784,  345,  346,  786,  787,  772,  773,
          774,  776,  777,  778,  356,  818,  819,  820,  821,  822,
          584,  779,  780,  585,  586,  941,  803,  801,  802,  814,
          798,  799,  835,  826,  587,  588,  797,  589,  590,  591,
          592,  593,  594, -328,   36,  251,   35, -194,  800,  595,
          596, -193,  140,  -85,  133,  134,  135,  582,  136,  137,
         1060,  751,  752,  753,  138,   38,  129, -110, -110, -585,
        -32766, -585, -110,-32766,-32766,-32766,  241,  836, -110,  145,
          959,  960,-32766,-32766,-32766,  961, -594,-32766,  482,  745,
          744,  955, 1036, -594,-32766,  991,-32766,-32766,-32766,-32766,
        -32766,-32766,-32766,-32766,-32766,-32766,-32766,-32766,  299,  754,
          831,   75,-32766,-32766,-32766,  291,  142,  326,  242,  -85,
          326,  382,  381,  265,  139,  404,  758,  759,  760,  761,
           82,  423,  429,-32766,  326,-32766,-32766,-32766,-32766,  815,
          762,  763,  764,  765,  766,  767,  768,  769,  770,  771,
          791,  583,  792,  793,  794,  795,  783,  784,  345,  346,
          786,  787,  772,  773,  774,  776,  777,  778,  356,  818,
          819,  820,  821,  822,  584,  779,  780,  585,  586,  254,
          803,  801,  802,  814,  798,  799,  832,  725,  587,  588,
          797,  589,  590,  591,  592,  593,  594, -328,   83,   84,
           85, -194,  800,  595,  596, -193,  149,  775,  746,  747,
          748,  749,  750,  151,  751,  752,  753,  788,  789,   37,
          483,   86,   87,   88,   89,   90,   91,   92,   93,   94,
           95,   96,   97,   98,   99,  100,  101,  102,  103,  104,
          105,  106,  107,  108,  109, -594,  274, -594,-32766,-32766,
        -32766,-32766,-32766,-32766,  310, 1089,  127,  312,  110,  737,
         1326,   21,  754,-32766,-32766,-32766, -272, 1325,-32766,-32766,
         1088,-32766,-32766,-32766,-32766,-32766,  755,  756,  757,  758,
          759,  760,  761, 1104,-32766,  824,-32766,-32766, -545,  429,
         1036,  323,  815,  762,  763,  764,  765,  766,  767,  768,
          769,  770,  771,  791,  813,  792,  793,  794,  795,  783,
          784,  785,  812,  786,  787,  772,  773,  774,  776,  777,
          778,  817,  818,  819,  820,  821,  822,  823,  779,  780,
          781,  782, 1033,  803,  801,  802,  814,  798,  799,  745,
          744,  790,  796,  797,  804,  805,  807,  806,  808,  809,
          152,-32766, -545, -545, 1036,  800,  811,  810,   50,   51,
           52,  513,   53,   54, 1240, 1239, 1241, -545,   55,   56,
         -110,   57,-32766, 1090,  920, -110,  556, -110,  292, -551,
          339, -545,  306,  103,  104, -110, -110, -110, -110, -110,
         -110, -110, -110,  105,  106,  107,  108,  109, 1245,  274,
          380,  381, -591, -367,  715, -367,  340,   58,   59, -591,
          423,  110,   60,  370,   61,  248,  249,   62,   63,   64,
           65,   66,   67,   68,   69, -544,   28,  267,   70,  445,
          514,-32766,  374, -342, 1272, 1273,  515, 1278,  835,  862,
          389,  863, 1270,   42,   25,  516,  943,  517,  943,  518,
          920,  519,  299, 1036,  520,  521, 1266,  910,  441,   44,
           45,  446,  377,  376,-32766,   46,  522, 1023, 1022, 1021,
         1024,  368,  338,  391, 1238,    7,  291,  442, 1231,  835,
          524,  525,  526,  443, 1245,  357, 1036,  362,  834, -544,
         -544,  154,  528,  529,  444, 1259, 1260, 1261, 1262, 1256,
         1257,  298,-32766,-32766, -544, -548, 1059, 1263, 1258,  291,
         1236, 1240, 1239, 1241,  299,  841, -550,   71, -544,  656,
           26,  321,  322,  326, -153, -153, -153,  920,  612,  675,
          676, 1035,  922,  910,-32766,  286,  710,  835,  155, -153,
          828, -153,  862, -153,  863, -153,  150,  407,  156, 1240,
         1239, 1241,-32766,-32766,-32766,  375, 1351,  716,   75, 1352,
          158, -591,   33, -591,  326,  835,  959,  960,  -78, -548,
         -548,  523,  920,-32766,  378,  379,  896,  955, -110, -110,
         -110,   32,  111,  112,  113,  114,  115,  116,  117,  118,
          119,  120,  121,  122,  123,  745,  744,  -58, -548,  -57,
         -110, -110,  717,  745,  744, -110,  383,  384,  922, 1033,
          910, -110,  710, -153,  647,  648,  830,  124,  141,  125,
        -32766, 1033,  326,  712, 1150, 1152,   48,  130,  131,  144,
          159, 1036,-32766,  160,  161, -543,   28,  162, 1238,  920,
          163,  299,  920, 1036,   75,-32766,-32766,-32766,  835,-32766,
          326,-32766, 1270,-32766,  282,  910,-32766,  -87,  -84,  -78,
          -73,-32766,-32766,-32766,   -4,  920,  282,-32766,-32766,  720,
          -72,  -71,  727,-32766,  420,  -70,  -69,  -68,  -67,  -66,
          287,  286,-32766,  -65,  -46,  922,  745,  744, 1231,  710,
          300,  301, -546,  -18,  148, -302,  273,  283,  726, -543,
         -543,  729,  528,  529,  920, 1259, 1260, 1261, 1262, 1256,
         1257,  919,   74,  147, -543,  288,  293, 1263, 1258,  126,
         -298,  280,  910,-32766,  281,  910,  284,   73, -543, 1238,
          976,  690,  322,  326,  710,  285,-32766,-32766,-32766,  332,
        -32766,  274,-32766,  294,-32766,  937,  110,-32766,  910,  685,
          835, -543,-32766,-32766,-32766,  826, -546, -546,-32766,-32766,
          146,-32766,  -50,  701,-32766,  420,  703,  691,   20, 1119,
          375, -546,  436,-32766,  645, 1353, 1277,  297,  657,-32766,
         1279,  959,  960,  561,  956, -546,  523,  910,  692,  693,
          678,  527,  955, -110, -110, -110,  132,  922,  662,  663,
          922,  710,  464, -508,  710,-32766, 1240, 1239, 1241,  493,
          679, 1238,  282,  939,   10, -543, -543,   40,-32766,-32766,
        -32766,  731,-32766,  922,-32766,  307,-32766,  710,   -4,-32766,
         -543,  305,   41,  304,-32766,-32766,-32766,    0,    0,-32766,
        -32766,-32766,  920,    0, -543, 1238,-32766,  420,  311,    0,
          567,  299,-32766,-32766,-32766,-32766,-32766, -498,-32766,  897,
        -32766,    0,  922,-32766,    8,    0,  710,   24,-32766,-32766,
        -32766,-32766,  372,  610,-32766,-32766,  834, 1238,  734, -275,
        -32766,  420,  920,  735,-32766,-32766,-32766,  854,-32766,-32766,
        -32766,  901,-32766, 1000,  977,-32766,   49,  984,  974,  488,
        -32766,-32766,-32766,-32766,  985,  899,-32766,-32766,  972, 1238,
          574, 1093,-32766,  420, 1096, 1097,-32766,-32766,-32766, 1094,
        -32766,-32766,-32766, 1095,-32766,  910, 1101,-32766, 1267,  846,
         1292, 1310,-32766,-32766,-32766, 1344,  650,   34,-32766,-32766,
         -579, -250, -250, -250,-32766,  420, -578,  375, -577, -551,
           28,  267, -550,-32766, -549, -492,    1,   29,  959,  960,
          302,  303,  835,  523,   30,  910, 1270,   39,  896,  955,
         -110, -110, -110,   43,   47,  373,   72,   76,   77,   78,
           79, -249, -249, -249,   80,   81,  143,  375,  153,  128,
         -273,  157,  247,  328,  357,  358,  359,  360,  959,  960,
          922,  361, 1231,  523,  710, -250,  362,  363,  896,  955,
         -110, -110, -110,  364,  365,  366,  367,  529,   28, 1259,
         1260, 1261, 1262, 1256, 1257,  369,  437,  555, 1207, -272,
          835, 1263, 1258,   13, 1270,   14,-32766,   15,   16,   18,
          922,   73, 1238, 1348,  710, -249,  322,  326,  406,-32766,
        -32766,-32766,  484,-32766,  485,-32766,  492,-32766,  495,  496,
        -32766,  497,  498,  502,  503,-32766,-32766,-32766,  504,  511,
         1231,-32766,-32766,  572,  696, 1249, 1190,-32766,  420, 1268,
         1062, 1061, 1042, 1226, 1038,  529,-32766, 1259, 1260, 1261,
         1262, 1256, 1257, -277, -102,   12,   17,   27,  296, 1263,
         1258,  405,  603,  607,  636,  702, 1194, 1244, 1191,   73,
          320, 1323,    0,  371,  322,  326,  711,  714,  718,  719,
          721,  722,  723,  724,  728,    0,  713,    0, 1350,  857,
          856,  865,  949,  992,  864, 1349,  948,  946,  947,  950,
         1222,  930,  940,  928,  982,  983,  634, 1347, 1304, 1293,
         1311, 1320,    0,    0, 1271,    0,  326
    );

    protected array $actionCheck = array(
            2,    3,    4,    5,    6,    7,    0,    9,   10,   11,
           12,   13,   70,    9,   10,   11,    9,   10,   11,    1,
           80,   44,   45,   46,   47,   48,   49,   50,  116,  117,
          118,  119,  120,  121,  122,   37,   38,   30,    1,   32,
           33,   34,   35,   36,   37,   38,   39,   40,   41,   42,
           43,    1,    9,   10,    1,   57,  116,  117,  118,  119,
          120,  121,  122,  129,  130,  131,    8,   31,    1,   71,
           72,   73,   74,   75,   76,   77,  134,  135,   80,   82,
            1,   31,   85,    8,   30,   87,   88,   89,   90,   91,
           92,   93,   94,   95,   96,   97,   98,   99,  100,  101,
          102,  103,  104,  105,  106,  107,  108,  109,  110,  111,
          112,  113,  114,  115,  116,  117,  118,  119,  120,  121,
          122,  123,  124,  125,  126,    1,  128,  129,  130,  131,
          132,  133,   82,   80,  136,  137,  138,  139,  140,  141,
          142,  143,  144,    8,  147,  148,    8,    8,  150,  151,
          152,    8,  154,   31,    2,    3,    4,    5,    6,    7,
          162,    9,   10,   11,   12,   13,    8,  117,  118,  160,
          116,  162,  122,    9,   10,   11,   97,  159,  128,    8,
          117,  118,    9,   10,   11,  122,    1,  137,   31,   37,
           38,  128,  138,    8,   30,  159,   32,   33,   34,   35,
           36,   37,   38,   30,    9,   32,   33,   34,  158,   57,
           80,  161,    9,   10,   11,  161,  163,  167,   14,   97,
          167,  106,  107,   71,   72,   73,   74,   75,   76,   77,
          163,  116,   80,   30,  167,   32,   33,   34,   35,   87,
           88,   89,   90,   91,   92,   93,   94,   95,   96,   97,
           98,   99,  100,  101,  102,  103,  104,  105,  106,  107,
          108,  109,  110,  111,  112,  113,  114,  115,  116,  117,
          118,  119,  120,  121,  122,  123,  124,  125,  126,    8,
          128,  129,  130,  131,  132,  133,  156,  163,  136,  137,
          138,  139,  140,  141,  142,  143,  144,  162,    9,   10,
           11,  162,  150,  151,  152,  162,  154,    2,    3,    4,
            5,    6,    7,   14,    9,   10,   11,   12,   13,   30,
          163,   32,   33,   34,   35,   36,   37,   38,   39,   40,
           41,   42,   43,   44,   45,   46,   47,   48,   49,   50,
           51,   52,   53,   54,   55,  160,   57,  162,    9,   10,
           11,    9,   10,   11,    8,  159,   14,    8,   69,  163,
            1,  101,   57,    9,   10,   11,  162,    8,  116,   30,
            1,   32,   33,   34,   35,   36,   71,   72,   73,   74,
           75,   76,   77,  123,   30,   80,   32,   33,   70,   80,
          138,    8,   87,   88,   89,   90,   91,   92,   93,   94,
           95,   96,   97,   98,   99,  100,  101,  102,  103,  104,
          105,  106,  107,  108,  109,  110,  111,  112,  113,  114,
          115,  116,  117,  118,  119,  120,  121,  122,  123,  124,
          125,  126,  116,  128,  129,  130,  131,  132,  133,   37,
           38,  136,  137,  138,  139,  140,  141,  142,  143,  144,
           14,  116,  134,  135,  138,  150,  151,  152,    2,    3,
            4,    5,    6,    7,  155,  156,  157,  149,   12,   13,
          101,   15,  137,  164,    1,  106,   85,  108,   30,  161,
            8,  163,  113,   49,   50,  116,  117,  118,  119,  120,
          121,  122,  123,   51,   52,   53,   54,   55,    1,   57,
          106,  107,    1,  106,   31,  108,    8,   51,   52,    8,
          116,   69,   56,    8,   58,   59,   60,   61,   62,   63,
           64,   65,   66,   67,   68,   70,   70,   71,   72,   73,
           74,  116,    8,  164,   78,   79,   80,  146,   82,  106,
            8,  108,   86,   87,   88,   89,  122,   91,  122,   93,
            1,   95,  158,  138,   98,   99,    1,   84,    8,  103,
          104,  105,  106,  107,  116,  109,  110,  119,  120,  121,
          122,  115,  116,  106,   80,  108,  161,    8,  122,   82,
          124,  125,  126,    8,    1,  161,  138,  161,  155,  134,
          135,   14,  136,  137,    8,  139,  140,  141,  142,  143,
          144,  145,   51,   52,  149,   70,    1,  151,  152,  161,
          116,  155,  156,  157,  158,    8,  161,  161,  163,   75,
           76,  165,  166,  167,   75,   76,   77,    1,   52,   75,
           76,  137,  159,   84,  137,   30,  163,   82,   14,   90,
           80,   92,  106,   94,  108,   96,  101,  102,   14,  155,
          156,  157,    9,   10,   11,  106,   80,   31,  161,   83,
           14,  160,   14,  162,  167,   82,  117,  118,   16,  134,
          135,  122,    1,   30,  106,  107,  127,  128,  129,  130,
          131,   16,   17,   18,   19,   20,   21,   22,   23,   24,
           25,   26,   27,   28,   29,   37,   38,   16,  163,   16,
          117,  118,   31,   37,   38,  122,  106,  107,  159,  116,
           84,  128,  163,  164,  111,  112,  156,   16,  163,   16,
          137,  116,  167,  163,   59,   60,   70,   16,   16,   16,
           16,  138,   74,   16,   16,   70,   70,   16,   80,    1,
           16,  158,    1,  138,  161,   87,   88,   89,   82,   91,
          167,   93,   86,   95,  161,   84,   98,   31,   31,   31,
           31,  103,  104,  105,    0,    1,  161,  109,  110,   31,
           31,   31,   31,  115,  116,   31,   31,   31,   31,   31,
           37,   30,  124,   31,   31,  159,   37,   38,  122,  163,
          134,  135,   70,   31,   31,   35,   31,   31,   31,  134,
          135,   31,  136,  137,    1,  139,  140,  141,  142,  143,
          144,   31,  154,   31,  149,   37,   37,  151,  152,  163,
           35,   35,   84,   74,   35,   84,   35,  161,  163,   80,
          159,   80,  166,  167,  163,   35,   87,   88,   89,   35,
           91,   57,   93,   37,   95,   38,   69,   98,   84,   77,
           82,   70,  103,  104,  105,   80,  134,  135,  109,  110,
           70,   85,   31,   80,  115,  116,   92,  116,   97,   82,
          106,  149,  108,  124,  113,   83,  146,  113,   90,  137,
          146,  117,  118,   89,  128,  163,  122,   84,  137,  138,
           94,  127,  128,  129,  130,  131,   31,  159,   96,  100,
          159,  163,   97,  149,  163,   74,  155,  156,  157,   97,
          100,   80,  161,  154,  150,  134,  135,  159,   87,   88,
           89,  164,   91,  159,   93,  114,   95,  163,  164,   98,
          149,  133,  159,  132,  103,  104,  105,   -1,   -1,   74,
          109,  110,    1,   -1,  163,   80,  115,  116,  132,   -1,
          153,  158,   87,   88,   89,  124,   91,  149,   93,  164,
           95,   -1,  159,   98,  149,   -1,  163,  149,  103,  104,
          105,   74,  149,  153,  109,  110,  155,   80,  159,  162,
          115,  116,    1,  159,   87,   88,   89,  159,   91,  124,
           93,  159,   95,  159,  159,   98,   70,  159,  159,  102,
          103,  104,  105,   74,  159,  159,  109,  110,  159,   80,
           81,  159,  115,  116,  159,  159,   87,   88,   89,  159,
           91,  124,   93,  159,   95,   84,  159,   98,  160,  160,
          160,  160,  103,  104,  105,  160,  160,  163,  109,  110,
          161,  100,  101,  102,  115,  116,  161,  106,  161,  161,
           70,   71,  161,  124,  161,  161,  161,  161,  117,  118,
          134,  135,   82,  122,  161,   84,   86,  161,  127,  128,
          129,  130,  131,  161,  161,  149,  161,  161,  161,  161,
          161,  100,  101,  102,  161,  161,  161,  106,  161,  163,
          162,  161,  161,  161,  161,  161,  161,  161,  117,  118,
          159,  161,  122,  122,  163,  164,  161,  161,  127,  128,
          129,  130,  131,  161,  161,  161,  161,  137,   70,  139,
          140,  141,  142,  143,  144,  161,  161,  161,  165,  162,
           82,  151,  152,  162,   86,  162,   74,  162,  162,  162,
          159,  161,   80,  164,  163,  164,  166,  167,  162,   87,
           88,   89,  162,   91,  162,   93,  162,   95,  162,  162,
           98,  162,  162,  162,  162,  103,  104,  105,  162,  162,
          122,  109,  110,  162,  162,  162,  162,  115,  116,  162,
          162,  162,  162,  162,  162,  137,  124,  139,  140,  141,
          142,  143,  144,  162,  162,  162,  162,  162,  162,  151,
          152,  162,  162,  162,  162,  162,  162,  162,  162,  161,
          163,  162,   -1,  163,  166,  167,  163,  163,  163,  163,
          163,  163,  163,  163,  163,   -1,  163,   -1,  164,  164,
          164,  164,  164,  164,  164,  164,  164,  164,  164,  164,
          164,  164,  164,  164,  164,  164,  164,  164,  164,  164,
          164,  164,   -1,   -1,  166,   -1,  167
    );

    protected array $actionBase = array(
            0,   -2,  152,  549,  764,  941,  981,  751,  555,  309,
          560,  864,  626,  738,  738,  741,  738,  473,  671,  783,
          -60,  305,  305,  783,  305,  803,  803,  803,  658,  658,
          658,  658,  749,  749,  897,  897,  929,  865,  831, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062, 1062,
         1062, 1062, 1062, 1062,   18,   36,   79,  648, 1036, 1044,
         1040, 1045, 1034, 1033, 1039, 1041, 1046, 1083, 1084,  782,
         1085, 1086, 1082, 1087, 1042,  876, 1035, 1043,  289,  289,
          289,  289,  289,  289,  289,  289,  289,  289,  289,  289,
          289,  289,  289,  289,  289,  289,  289,  289,  289,  289,
          289,  289,  289,  289,  289,  195,  342,   43,    4,    4,
            4,    4,    4,    4,    4,    4,    4,    4,    4,    4,
            4,    4,    4,    4,    4,    4,    4,    4,  643,  643,
          643,  666,  666,  354,  173,  980,  203, 1048, 1048, 1048,
         1048, 1048, 1048, 1048, 1048, 1048,  665,  339,  164,  164,
            7,    7,    7,    7,    7,   50,  369,  583,  -23,  -23,
          -23,  -23,  448,  605,  497,  260,  397,  434,   54,  394,
          593,  593,  316,  316,  415,  415,  316,  316,  316,  442,
          442,  252,  252,  252,  252,  318,  455,  433,  391,  742,
           53,   53,   53,   53,  742,  742,  742,  742,  734, 1088,
          742,  742,  742,  722,  781,  781,  926,  551,  551,  781,
          536,   -3,   -3,  536,   63,   -3,   67,  576,  335,  756,
          115,    9,  335,  535,  656,  501,  185,  821,  568,  821,
         1032,  424,  776,  776,  426,  753,  729,  867, 1063, 1049,
          799, 1080,  810, 1081,  -66,  -58,  728, 1031, 1031, 1031,
         1031, 1031, 1031, 1031, 1031, 1031, 1031, 1031, 1089,  402,
         1032,  130, 1089, 1089, 1089,  402,  402,  402,  402,  402,
          402,  402,  402,  402,  402,  603,  130,  544,  554,  130,
          804,  402,   18,  808,   18,   18,   18,   18,   18,   18,
           18,   18,   18,   18,  762,  157,   18,   36,  124,  124,
          196,   37,  124,  124,  124,  124,   18,   18,   18,   18,
          568,  784,  797,  600,  820,  143,  784,  784,  784,  122,
          135,  204,  139,  760,  785,  467,  775,  775,  787,  895,
          895,  775,  768,  775,  787,  913,  775,  775,  895,  895,
          793,  158,  550,  472,  524,  569,  895,  346,  775,  775,
          775,  775,  816,  575,  775,  271,  171,  775,  775,  816,
          801,  766,   58,  798,  895,  895,  895,  816,  505,  798,
          798,  798,  819,  824,  761,  765,  383,  349,  607,  138,
          807,  765,  765,  775,  532,  761,  765,  761,  765,  759,
          765,  765,  765,  761,  765,  768,  498,  765,  714,  586,
           75,  765,    6,  915,  916,  726,  917,  906,  918,  965,
          919,  923, 1053,  894,  931,  912,  924,  966,  903,  896,
          780,  701,  703,  815,  754,  893,  777,  777,  777,  888,
          777,  777,  777,  777,  777,  777,  777,  777,  701,  868,
          823,  794,  934,  711,  712, 1011,  730,  795,  963,  933,
         1013,  925,  758,  713,  977,  935,  757, 1047,  936,  940,
          986, 1014,  828, 1017,  979,  790, 1064, 1065,  869,  946,
         1054,  777,  915,  923,  727,  912,  924,  903,  896,  752,
          748,  746,  747,  745,  744,  739,  740,  763, 1018,  887,
          879,  870,  945,  891,  701,  871,  971,  874,  990,  992,
         1050,  805,  792,  875, 1066,  952,  953,  954, 1055, 1019,
         1056,  773,  973,  817,  994,  812, 1067,  996,  997,  999,
         1000, 1057, 1068, 1058,  885, 1059,  832,  788,  928,  802,
         1069,  299,  791,  800,  806,  964,  436,  932, 1060, 1070,
         1071, 1001, 1002, 1006, 1072, 1073,  927,  834,  975,  796,
          976,  967,  835,  838,  577,  779, 1020,  786,  789,  778,
          624,  634, 1074, 1075, 1076,  930,  767,  772,  839,  845,
         1021,  743, 1022, 1077,  646,  846,  717, 1078, 1012,  718,
          721,  652,  683,  681,  724,  774, 1061,  818,  811,  771,
          955,  721,  770,  849, 1079,  852,  855,  856, 1007,  860,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
          456,  456,  456,  456,  456,  456,  305,  305,  305,  305,
          305,  456,  456,  456,  456,  456,  456,  456,  305,  305,
            0,    0,  305,    0,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  456,  456,  456,  456,  456,  456,  456,
          456,  456,  456,  289,  289,  289,  289,  289,  289,  289,
          289,  289,  289,  289,  289,  289,  289,  289,  289,  289,
          289,  289,  289,  289,  289,  289,  289,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,  289,  289,  289,  289,  289,  289,
          289,  289,  289,  289,  289,  289,  289,  289,  289,  289,
          289,  289,  289,  289,  289,  289,  289,  289,  289,  289,
          494,  494,  289,  289,  494,  289,  494,  494,  494,  494,
          494,  494,  494,  494,  494,    0,  289,  289,  289,  289,
          289,  289,  289,  289,  494,  793,  494,  442,  442,  442,
          442,  494,  494,  494,  -88,  -88,  442,  494,   63,  494,
          494,  494,  494,  494,  494,  494,  494,  494,    0,    0,
          494,  494,  494,  494,    0,    0,  130,   -3,  494,  768,
          768,  768,  768,  494,  494,  494,  494,   -3,   -3,  494,
          494,  494,    0,    0,    0,    0,  442,  442,    0,  130,
            0,    0,  130,    0,    0,  768,  768,  494,   63,  793,
          359,  494,    0,    0,    0,    0,  130,  768,  130,  402,
          775,   -3,   -3,  775,  402,  402,  124,   18,  359,  545,
          545,  545,  545,    0,    0,  568,  793,  793,  793,  793,
          793,  793,  793,  793,  793,  793,  793,  768,    0,  793,
            0,  768,  768,  768,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,  768,
            0,    0,  895,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,  913,    0,    0,    0,    0,    0,    0,
          768,    0,    0,    0,    0,    0,    0,    0,    0,    0,
          777,  805,    0,  805,    0,  777,  777,  777,    0,    0,
            0,    0,  779,  743
    );

    protected array $actionDefault = array(
            3,32767,  102,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,  100,32767,32767,32767,32767,  597,  597,
          597,  597,32767,32767,  254,  102,32767,32767,  470,  387,
          387,  387,32767,32767,  541,  541,  541,  541,  541,  541,
        32767,32767,32767,32767,32767,32767,  470,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,  100,
        32767,32767,32767,   36,    7,    8,   10,   11,   49,   17,
          324,32767,32767,32767,32767,  102,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,  590,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,  474,  453,
          454,  456,  457,  386,  542,  596,  327,  593,  385,  145,
          339,  329,  242,  330,  258,  475,  259,  476,  479,  480,
          215,  287,  382,  149,  150,  417,  471,  419,  469,  473,
          418,  392,  398,  399,  400,  401,  402,  403,  404,  405,
          406,  407,  408,  409,  410,  390,  391,  472,  450,  449,
          448,32767,32767,  415,  416,32767,  420,32767,32767,32767,
        32767,32767,32767,32767,  102,32767,  389,  423,  421,  422,
          439,  440,  437,  438,  441,32767,32767,32767,  442,  443,
          444,  445,  316,32767,32767,  366,  364,  424,  316,  111,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,  430,
          431,32767,32767,32767,32767,  535,  447,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
          102,32767,  100,  537,  412,  414,  504,  425,  426,  393,
        32767,  511,32767,  102,32767,  513,32767,32767,32767,32767,
        32767,32767,32767,  536,32767,  543,  543,32767,  497,  100,
          195,32767,32767,  512,32767,  195,  195,32767,32767,32767,
        32767,32767,32767,32767,32767,  604,  497,  110,  110,  110,
          110,  110,  110,  110,  110,  110,  110,  110,32767,  195,
          110,32767,32767,32767,  100,  195,  195,  195,  195,  195,
          195,  195,  195,  195,  195,  190,32767,  268,  270,  102,
          558,  195,32767,  516,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,  509,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
          497,  435,  138,32767,  138,  543,  427,  428,  429,  499,
          543,  543,  543,  312,  289,32767,32767,32767,32767,  514,
          514,  100,  100,  100,  100,  509,32767,32767,32767,32767,
          111,   99,   99,   99,   99,   99,  103,  101,32767,32767,
        32767,32767,  223,   99,32767,  101,  101,32767,32767,  223,
          225,  212,  101,  227,32767,  562,  563,  223,  101,  227,
          227,  227,  247,  247,  486,  318,  101,   99,  101,  101,
          197,  318,  318,32767,  101,  486,  318,  486,  318,  199,
          318,  318,  318,  486,  318,32767,  101,  318,  214,   99,
           99,  318,32767,32767,32767,  499,32767,32767,32767,32767,
        32767,32767,32767,  222,32767,32767,32767,32767,32767,32767,
        32767,32767,  530,32767,  547,  560,  433,  434,  436,  545,
          458,  459,  460,  461,  462,  463,  464,  466,  592,32767,
          503,32767,32767,32767,  338,32767,  602,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,  603,32767,  543,32767,32767,32767,
        32767,  432,    9,   74,  492,   42,   43,   51,   57,  520,
          521,  522,  523,  517,  518,  524,  519,32767,32767,  525,
          568,32767,32767,  544,  595,32767,32767,32767,32767,32767,
        32767,  138,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,  530,32767,  136,32767,32767,32767,32767,
        32767,32767,32767,32767,  526,32767,32767,32767,  543,32767,
        32767,32767,32767,  314,  311,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,  543,32767,32767,32767,32767,32767,  291,32767,  308,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,  286,32767,32767,  381,
          499,  294,  296,  297,32767,32767,32767,32767,  360,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
          152,  152,    3,    3,  341,  152,  152,  152,  341,  341,
          152,  341,  341,  341,  152,  152,  152,  152,  152,  152,
          280,  185,  262,  265,  247,  247,  152,  352,  152
    );

    protected array $goto = array(
          196,  196, 1034, 1065,  697,  431,  661,  621,  658,  319,
          706,  425,  314,  315,  335,  576,  430,  336,  432,  638,
          654,  655,  852,  672,  673,  674,  853,  167,  167,  167,
          167,  221,  197,  193,  193,  177,  179,  216,  193,  193,
          193,  193,  193,  194,  194,  194,  194,  194,  194,  188,
          189,  190,  191,  192,  218,  216,  219,  536,  537,  421,
          538,  540,  541,  542,  543,  544,  545,  546,  547, 1136,
          168,  169,  170,  195,  171,  172,  173,  166,  174,  175,
          176,  178,  215,  217,  220,  238,  243,  244,  246,  257,
          258,  259,  260,  261,  262,  263,  264,  268,  269,  270,
          271,  277,  289,  290,  317,  318,  426,  427,  428,  581,
          222,  223,  224,  225,  226,  227,  228,  229,  230,  231,
          232,  233,  234,  235,  236,  180,  237,  181,  198,  199,
          200,  239,  188,  189,  190,  191,  192,  218, 1136,  201,
          182,  183,  184,  202,  198,  185,  240,  203,  201,  165,
          204,  205,  186,  206,  207,  208,  187,  209,  210,  211,
          212,  213,  214,  855, 1232,  975,  279,  279,  279,  279,
          623,  623,  419,  351, 1269,  600, 1269, 1269, 1269, 1269,
         1269, 1269, 1269, 1269, 1269, 1287, 1287,  599, 1100, 1287,
          709, 1287, 1287, 1287, 1287, 1287, 1287, 1287, 1287, 1287,
          508,  700,  827, 1098,  458,  559,  552,  860,  833,  909,
          904,  905,  918,  861,  906,  858,  907,  908,  859, 1233,
         1234,  912,  500,  886,  501,  252,  252,  843, 1107, 1108,
          507, 1087, 1082, 1083, 1084,  341,  552,  559,  568,  569,
          344,  579,  602,  616,  617, 1235, 1295, 1296,  833,  440,
          833,   22,  250,  250,  250,  250,  245,  253,  694,  573,
         1237,  829, 1237,  893,  851,  893,  893, 1034, 1034, 1237,
          694,  349,  342, 1034,  694, 1034, 1034, 1034, 1034, 1034,
         1034, 1034, 1034, 1034,  848, 1327, 1034, 1034, 1034, 1034,
         1319, 1319, 1319, 1319, 1237,  343,  342, 1040, 1039, 1237,
         1237, 1237, 1237,  868,  996, 1237, 1237, 1237,  913,  355,
          914,  354,  354,  354,  354,  466,  466,  479,  880,  355,
          355,  867,  394,  926,  466,  481,  571,  927,  967,  410,
          705,  942,  355,  355,  942,  848,  355,  660, 1354,  609,
          624,  627,  628,  629,  630,  651,  652,  653,  708,  554,
         1133, 1285, 1285,  355,  355, 1285, 1058, 1285, 1285, 1285,
         1285, 1285, 1285, 1285, 1285, 1285,  539,  539, 1185,  424,
          539,  611,  539,  539,  539,  539,  539,  539,  539,  539,
          539,  566,  682, 1337, 1337,  733,  637,  639, 1043, 1044,
          659,  476, 1312, 1313,  683,  687, 1010,  695,  704, 1006,
         1337, 1298,  438,  408,  409,  631,  633,  635,  670,    5,
          671,    6,  412,  413,  414,  337,  684, 1340, 1340,  415,
          325,  309,  686,  347,  352,  353,  553,  563,  450,  450,
          450,  553, 1309,  563, 1309,  666,  397,  462,  845, 1314,
         1315, 1309,  548,  548,  548,  548,  873,  604,  469,  580,
          470,  471,  403,  554,  878,  848,  958, 1345, 1346,  577,
          614,  870,  550,  615,  550,  255,  255, 1321, 1321, 1321,
         1321,  550,  999, 1018,  477,  971, 1228,  732,  736,  881,
          869, 1070, 1074,  876,  882,  551, 1008, 1003, 1071, 1075,
          978,  980,    0, 1305, 1118,    0,  456,    0,    0,    0,
            0,  969,  969,  969,  969,    0,    0,  456,  963,  970,
            0,    0,    0,    0,  968,    0, 1230,    0,    0,    0,
          450,  450,  450,  450,  450,  450,  450,  450,  450,  450,
          450,  931, 1123,  450,    0, 1073, 1116,  885,  619, 1307,
         1307, 1073, 1216,  944, 1015,  433, 1217, 1220,  945, 1221,
            0,  433,  872,    0,  664,  994,    0, 1041, 1041,    0,
          866,    0,    0,    0,  665, 1052, 1048, 1049,    0,    0,
            0,    0, 1227,  324,  275,  324, 1037, 1037,  681,  952,
            0,    0, 1029, 1045, 1046,  396,  399,  560,  601,  605,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0, 1013, 1013
    );

    protected array $gotoCheck = array(
           42,   42,   73,  127,   73,   66,   66,   56,   56,   66,
            9,   66,   66,   66,   66,   66,   66,   66,   66,   66,
           86,   86,   26,   86,   86,   86,   27,   42,   42,   42,
=======
          153,  154,  155,  156,  157,  158,  159,  160,  161,  162,
          163,  164
    );

    protected array $action = array(
          132,  133,  134,  582,  135,  136,  162,  779,  780,  781,
          137,   41,  863,-32766,  970, 1404, -584,  974,  973, 1302,
            0,  395,  396,  455,  246,  854,-32766,-32766,-32766,-32766,
        -32766,  440,-32766,   27,-32766,  773,  772,-32766,-32766,-32766,
        -32766,  508,-32766,-32766,-32766,-32766,-32766,-32766,-32766,-32766,
          131,-32766,-32766,-32766,-32766,  437,  782,  859, 1148,-32766,
          949,-32766,-32766,-32766,-32766,-32766,-32766,  972, 1385,  300,
          271,   53,  398,  786,  787,  788,  789,  305,  865,  441,
         -341,   39,  254, -584, -584, -195,  843,  790,  791,  792,
          793,  794,  795,  796,  797,  798,  799,  819,  583,  820,
          821,  822,  823,  811,  812,  353,  354,  814,  815,  800,
          801,  802,  804,  805,  806,  368,  846,  847,  848,  849,
          850,  584, 1062, -194,  856,  807,  808,  585,  586,    3,
          831,  829,  830,  842,  826,  827,    4,  860,  587,  588,
          825,  589,  590,  591,  592,  939,  593,  594,    5,  854,
        -32766,-32766,-32766,  828,  595,  596,-32766,  138,  764,  132,
          133,  134,  582,  135,  136, 1098,  779,  780,  781,  137,
           41,-32766,-32766,-32766,-32766,-32766,-32766, -275, 1302,  613,
          153, 1071,  749,  990,  991,-32766,-32766,-32766,  992,-32766,
          891,-32766,  892,-32766,  773,  772,-32766,  986, 1309,  397,
          396,-32766,-32766,-32766,  858,  299,  630,-32766,-32766,  440,
          502,  736,-32766,-32766,  437,  782,-32767,-32767,-32767,-32767,
          106,  107,  108,  109,  951,-32766, 1021,   29,  734,  271,
           53,  398,  786,  787,  788,  789,  144, 1071,  441, -341,
          332,   38,  864,  862, -195,  843,  790,  791,  792,  793,
          794,  795,  796,  797,  798,  799,  819,  583,  820,  821,
          822,  823,  811,  812,  353,  354,  814,  815,  800,  801,
          802,  804,  805,  806,  368,  846,  847,  848,  849,  850,
          584,  863, -194,  139,  807,  808,  585,  586,  323,  831,
          829,  830,  842,  826,  827, 1370,  148,  587,  588,  825,
          589,  590,  591,  592,  245,  593,  594,  395,  396,-32766,
        -32766,-32766,  828,  595,  596,  -85,  138,  440,  132,  133,
          134,  582,  135,  136, 1095,  779,  780,  781,  137,   41,
        -32766,-32766,-32766,-32766,-32766,   51,  578, 1302,  257,-32766,
          636,  107,  108,  109,-32766,-32766,-32766,  503,-32766,  316,
        -32766,-32766,-32766,  773,  772,-32766, -383,  166, -383, 1022,
        -32766,-32766,-32766,  305,   79, 1133,-32766,-32766, 1414,  762,
          332, 1415,-32766,  437,  782,-32766, 1071,  110,  111,  112,
          113,  114,  -85,  283,-32766,  477,  478,  479,  271,   53,
          398,  786,  787,  788,  789,  115,  407,  441,   10,-32766,
          299, 1341,  306,  307,  843,  790,  791,  792,  793,  794,
          795,  796,  797,  798,  799,  819,  583,  820,  821,  822,
          823,  811,  812,  353,  354,  814,  815,  800,  801,  802,
          804,  805,  806,  368,  846,  847,  848,  849,  850,  584,
          320, 1068, -582,  807,  808,  585,  586, 1389,  831,  829,
          830,  842,  826,  827,  329, 1388,  587,  588,  825,  589,
          590,  591,  592,   86,  593,  594, 1071,  332,-32766,-32766,
        -32766,  828,  595,  596,  349,  151, -581,  132,  133,  134,
          582,  135,  136, 1100,  779,  780,  781,  137,   41,-32766,
          290,-32766,-32766,-32766,-32766,-32766,-32766,-32766,-32767,-32767,
        -32767,-32767,-32767,-32766,-32766,-32766,  891, 1175,  892, -582,
         -582,  754,  773,  772, 1159, 1160, 1161, 1155, 1154, 1153,
         1162, 1156, 1157, 1158,-32766, -582,-32766,-32766,-32766,-32766,
        -32766,-32766,-32766,  782,-32766,-32766,-32766, -588,  -78,-32766,
        -32766,-32766,  350, -581, -581,-32766,-32766,  271,   53,  398,
          786,  787,  788,  789,  383,-32766,  441,-32766,-32766, -581,
        -32766,  773,  772,  843,  790,  791,  792,  793,  794,  795,
          796,  797,  798,  799,  819,  583,  820,  821,  822,  823,
          811,  812,  353,  354,  814,  815,  800,  801,  802,  804,
          805,  806,  368,  846,  847,  848,  849,  850,  584, -620,
         1068, -620,  807,  808,  585,  586,  389,  831,  829,  830,
          842,  826,  827,  441,  405,  587,  588,  825,  589,  590,
          591,  592,  333,  593,  594, 1071,   87,   88,   89,  459,
          828,  595,  596,  460,  151,  803,  774,  775,  776,  777,
          778,  854,  779,  780,  781,  816,  817,   40,  461,   90,
           91,   92,   93,   94,   95,   96,   97,   98,   99,  100,
          101,  102,  103,  104,  105,  106,  107,  108,  109,  110,
          111,  112,  113,  114,  462,  283, 1329, 1159, 1160, 1161,
         1155, 1154, 1153, 1162, 1156, 1157, 1158,  115,  869,  488,
          489,  782, 1304, 1303, 1305,  108,  109, 1132,  154,-32766,
        -32766, 1134,  679,   23,  156,  783,  784,  785,  786,  787,
          788,  789,  698,  699,  852,  152,  423, -580,  393,  394,
          157,  843,  790,  791,  792,  793,  794,  795,  796,  797,
          798,  799,  819,  841,  820,  821,  822,  823,  811,  812,
          813,  840,  814,  815,  800,  801,  802,  804,  805,  806,
          845,  846,  847,  848,  849,  850,  851, 1094, -578,  863,
          807,  808,  809,  810,  -58,  831,  829,  830,  842,  826,
          827,  399,  400,  818,  824,  825,  832,  833,  835,  834,
          294,  836,  837,  158, -580, -580,  160,  294,  828,  839,
          838,   54,   55,   56,   57,  534,   58,   59,   36, -110,
         -580,  -57,   60,   61, -110,   62, -110,  670,  671,  129,
          130,  312, -587,  140, -110, -110, -110, -110, -110, -110,
         -110, -110, -110, -110, -110, -578, -578,  141,  147,  949,
          161,  712,  -87,  163,  164,  165,  -84,  949,  -78,  -73,
          -72, -578,   63,   64,  143, -309,  -71,   65,  332,   66,
          251,  252,   67,   68,   69,   70,   71,   72,   73,   74,
          739,   31,  276,   47,  457,  535, -357,  713,  740, 1335,
         1336,  536,  -70,  863, 1068,  -69,  -68, 1333,   45,   22,
          537,  949,  538,  -67,  539,  -66,  540,   52,  -65,  541,
          542,  714,  715,  -46,   48,   49,  463,  392,  391, 1071,
           50,  543,  -18,  145,  281, 1302,  381,  348,  291,  750,
         1304, 1303, 1305, 1295,  939,  753,  290,  948,  545,  546,
          547,  150,  939,  290, -305,  295,  288,  289,  292,  293,
          549,  550,  338, 1321, 1322, 1323, 1324, 1326, 1318, 1319,
          304, 1300,  296,  301,  302,  283, 1325, 1320,  773,  772,
         1304, 1303, 1305,  305,  308,  309,   75, -154, -154, -154,
          327,  328,  332,  966,  854, 1070,  939,  149,  115, 1416,
          388,  680, -154,  708, -154,  725, -154,   13, -154,  668,
          723,  313,   31,  277, 1304, 1303, 1305,  863,  390,-32766,
          600, 1166,  987,  951,  863,  310,  701,  734, 1333,  990,
          991,  951,-32766,  686,  544,  734,  949,  685,  606, 1340,
          485,  513,  925,  986, -110, -110, -110,   35,  116,  117,
          118,  119,  120,  121,  122,  123,  124,  125,  126,  127,
          128,  702,  949,  634, 1295,  773,  772,  741, -579,  305,
         -614, 1334,    0,    0,    0,  951,  311,  949,    0,  734,
         -154,  549,  550,  319, 1321, 1322, 1323, 1324, 1326, 1318,
         1319, 1209, 1211,  744,    0, 1342,    0, 1325, 1320, -544,
         -534,    0, -578,-32766,   -4,  949,   11,   77,  751, 1302,
           30,  387,  328,  332,  862,   43,-32766,-32766,-32766, -613,
        -32766,  939,-32766,  968,-32766,   44,  759,-32766, 1330,  773,
          772,  760,-32766,-32766,-32766, -579, -579,  882,-32766,-32766,
          930, 1031, 1008, 1015,-32766,  437, 1005,  939, 1016,  928,
         1003, -579, 1137, 1140, 1141, 1138,-32766, 1177, 1139, 1145,
           37,  874,  939, -586, 1357, 1374, 1407,-32766,  673, -578,
         -578, -612, -588, 1302, -587, -586, -585,   31,  276, -528,
        -32766,-32766,-32766,    1,-32766, -578,-32766,   78,-32766,  863,
          939,-32766,   32, 1333, -278,   33,-32766,-32766,-32766,   42,
         1007,   46,-32766,-32766,  734,   76,   80,   81,-32766,  437,
           82,   83,  390,   84,  453,   31,  277,   85,  146,  303,
        -32766,  155,  159,  990,  991,  249,  951,  863,  544, 1295,
          734, 1333,  334,  369,  370,  371,  548,  986, -110, -110,
         -110,  951,  372,  326,  373,  734,  374,  550,  375, 1321,
         1322, 1323, 1324, 1326, 1318, 1319,  376,  377,  422,  378,
           21,  -50, 1325, 1320,  379,  382,  454, 1295,  577,  951,
          380,  384,   77,  734,   -4, -276, -275,  328,  332,   15,
           16,   17,   18,   20,  363,  550,  421, 1321, 1322, 1323,
         1324, 1326, 1318, 1319,  142,  504,  505,  512,  515,  516,
         1325, 1320,  949,  517,  518,-32766,  522,  523,  524,  531,
           77, 1302,  611,  718, 1101,  328,  332, 1097,-32766,-32766,
        -32766, 1250,-32766, 1331,-32766,  949,-32766, 1099, 1096,-32766,
         1077, 1290, 1309, 1073,-32766,-32766,-32766, -280,-32766, -102,
        -32766,-32766,   14,   19, 1302,   24,-32766,  437,  323,  420,
          625,-32766,-32766,-32766,  631,-32766,  659,-32766,-32766,-32766,
          724, 1254,-32766,  -16, 1308, 1251, 1386,-32766,-32766,-32766,
          735,-32766,  738,-32766,-32766,  742,  743, 1302,  745,-32766,
          437,  746,  747,  748,-32766,-32766,-32766,  939,-32766,  300,
        -32766,-32766,-32766,  752, 1309,-32766,  764,  737,  332,  765,
        -32766,-32766,-32766, -253, -253, -253,-32766,-32766,  426,  390,
          939,  756,-32766,  437,  926,  863, 1411, 1413,  885,  884,
          990,  991,  980, 1023,-32766,  544, -252, -252, -252, 1412,
          979,  977,  390,  925,  986, -110, -110, -110,  978,  981,
         1283,  959,  969,  990,  991,  957, 1176, 1172,  544, 1126,
         -110, -110, 1013, 1014,  657, -110,  925,  986, -110, -110,
         -110, 1410,    2, 1368, -110, 1268,  951, 1383,    0,    0,
          734, -253,    0,-32766,    0,    0,-32766,  863, 1059, 1054,
         1053, 1052, 1058, 1055, 1056, 1057,    0,    0,    0,  951,
            0,    0,    0,  734, -252,  305,    0,    0,   79,    0,
            0, 1071,    0,    0,  332,    0,    0,    0,    0,    0,
            0,    0, -110, -110,    0,    0,    0, -110,    0,    0,
            0,    0,    0,    0,    0,  299, -110,    0,    0,    0,
            0,    0,    0,    0,    0,-32766,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,  305,    0,    0,
           79,    0,    0,    0,    0,    0,  332
    );

    protected array $actionCheck = array(
            3,    4,    5,    6,    7,    8,   17,   10,   11,   12,
           13,   14,   84,   76,    1,   87,   72,   74,   75,   82,
            0,  108,  109,  110,   15,   82,   89,   90,   91,   10,
           93,  118,   95,  103,   97,   38,   39,  100,   10,   11,
           12,  104,  105,  106,  107,   10,   11,   12,  111,  112,
           15,   10,   11,   12,  117,  118,   59,   82,  128,   31,
            1,   33,   34,   35,   36,   37,  129,  124,    1,   31,
           73,   74,   75,   76,   77,   78,   79,  164,    1,   82,
            9,  153,  154,  139,  140,    9,   89,   90,   91,   92,
           93,   94,   95,   96,   97,   98,   99,  100,  101,  102,
          103,  104,  105,  106,  107,  108,  109,  110,  111,  112,
          113,  114,  115,  116,  117,  118,  119,  120,  121,  122,
          123,  124,    1,    9,   82,  128,  129,  130,  131,    9,
          133,  134,  135,  136,  137,  138,    9,  162,  141,  142,
          143,  144,  145,  146,  147,   86,  149,  150,    9,   82,
           10,   11,   12,  156,  157,  158,  118,  160,  169,    3,
            4,    5,    6,    7,    8,  168,   10,   11,   12,   13,
           14,   31,   76,   33,   34,   35,   36,  168,   82,   83,
           15,  143,  169,  119,  120,   89,   90,   91,  124,   93,
          108,   95,  110,   97,   38,   39,  100,  133,    1,  108,
          109,  105,  106,  107,  162,  167,    1,  111,  112,  118,
           32,  169,  118,  117,  118,   59,   45,   46,   47,   48,
           49,   50,   51,   52,  165,  129,   32,    9,  169,   73,
           74,   75,   76,   77,   78,   79,  169,  143,   82,  168,
          173,    9,  165,  161,  168,   89,   90,   91,   92,   93,
           94,   95,   96,   97,   98,   99,  100,  101,  102,  103,
          104,  105,  106,  107,  108,  109,  110,  111,  112,  113,
          114,  115,  116,  117,  118,  119,  120,  121,  122,  123,
          124,   84,  168,    9,  128,  129,  130,  131,  168,  133,
          134,  135,  136,  137,  138,    1,    9,  141,  142,  143,
          144,  145,  146,  147,   99,  149,  150,  108,  109,   10,
           11,   12,  156,  157,  158,   32,  160,  118,    3,    4,
            5,    6,    7,    8,  168,   10,   11,   12,   13,   14,
           31,   76,   33,   34,   35,   72,   87,   82,    9,  142,
           54,   50,   51,   52,   89,   90,   91,  169,   93,    9,
           95,  118,   97,   38,   39,  100,  108,   15,  110,  165,
          105,  106,  107,  164,  167,  165,  111,  112,   82,  169,
          173,   85,  117,  118,   59,  118,  143,   53,   54,   55,
           56,   57,   99,   59,  129,  134,  135,  136,   73,   74,
           75,   76,   77,   78,   79,   71,  108,   82,  110,  142,
          167,  152,  139,  140,   89,   90,   91,   92,   93,   94,
           95,   96,   97,   98,   99,  100,  101,  102,  103,  104,
          105,  106,  107,  108,  109,  110,  111,  112,  113,  114,
          115,  116,  117,  118,  119,  120,  121,  122,  123,  124,
            9,  118,   72,  128,  129,  130,  131,    1,  133,  134,
          135,  136,  137,  138,    9,    9,  141,  142,  143,  144,
          145,  146,  147,  169,  149,  150,  143,  173,   10,   11,
           12,  156,  157,  158,    9,  160,   72,    3,    4,    5,
            6,    7,    8,  168,   10,   11,   12,   13,   14,   31,
          167,   33,   34,   35,   36,   37,   38,   39,   40,   41,
           42,   43,   44,   10,   11,   12,  108,  165,  110,  139,
          140,  169,   38,   39,  118,  119,  120,  121,  122,  123,
          124,  125,  126,  127,   31,  155,   33,   34,   35,   36,
           37,   38,   39,   59,   10,   11,   12,  167,   17,   10,
           11,   12,    9,  139,  140,   10,   11,   73,   74,   75,
           76,   77,   78,   79,    9,   31,   82,   33,   34,  155,
           31,   38,   39,   89,   90,   91,   92,   93,   94,   95,
           96,   97,   98,   99,  100,  101,  102,  103,  104,  105,
          106,  107,  108,  109,  110,  111,  112,  113,  114,  115,
          116,  117,  118,  119,  120,  121,  122,  123,  124,  166,
          118,  168,  128,  129,  130,  131,    9,  133,  134,  135,
          136,  137,  138,   82,    9,  141,  142,  143,  144,  145,
          146,  147,   72,  149,  150,  143,   10,   11,   12,    9,
          156,  157,  158,    9,  160,    3,    4,    5,    6,    7,
            8,   82,   10,   11,   12,   13,   14,   31,    9,   33,
           34,   35,   36,   37,   38,   39,   40,   41,   42,   43,
           44,   45,   46,   47,   48,   49,   50,   51,   52,   53,
           54,   55,   56,   57,    9,   59,    1,  118,  119,  120,
          121,  122,  123,  124,  125,  126,  127,   71,    9,  139,
          140,   59,  161,  162,  163,   51,   52,    1,   15,   53,
           54,  170,   77,   78,   15,   73,   74,   75,   76,   77,
           78,   79,   77,   78,   82,  103,  104,   72,  108,  109,
           15,   89,   90,   91,   92,   93,   94,   95,   96,   97,
           98,   99,  100,  101,  102,  103,  104,  105,  106,  107,
          108,  109,  110,  111,  112,  113,  114,  115,  116,  117,
          118,  119,  120,  121,  122,  123,  124,    1,   72,   84,
          128,  129,  130,  131,   17,  133,  134,  135,  136,  137,
          138,  108,  109,  141,  142,  143,  144,  145,  146,  147,
           31,  149,  150,   15,  139,  140,   15,   31,  156,  157,
          158,    2,    3,    4,    5,    6,    7,    8,   15,  103,
          155,   17,   13,   14,  108,   16,  110,  113,  114,   17,
           17,  115,  167,   17,  118,  119,  120,  121,  122,  123,
          124,  125,  126,  127,  128,  139,  140,   17,   17,    1,
           17,   82,   32,   17,   17,   17,   32,    1,   32,   32,
           32,  155,   53,   54,  169,   36,   32,   58,  173,   60,
           61,   62,   63,   64,   65,   66,   67,   68,   69,   70,
           32,   72,   73,   74,   75,   76,  170,  118,   32,   80,
           81,   82,   32,   84,  118,   32,   32,   88,   89,   90,
           91,    1,   93,   32,   95,   32,   97,   72,   32,  100,
          101,  142,  143,   32,  105,  106,  107,  108,  109,  143,
          111,  112,   32,   32,   32,   82,  117,  118,   32,   32,
          161,  162,  163,  124,   86,   32,  167,   32,  129,  130,
          131,   32,   86,  167,   36,   38,   36,   36,   36,   36,
          141,  142,   36,  144,  145,  146,  147,  148,  149,  150,
          151,  118,   38,   38,   38,   59,  157,  158,   38,   39,
          161,  162,  163,  164,  139,  140,  167,   77,   78,   79,
          171,  172,  173,   39,   82,  142,   86,   72,   71,   85,
          155,   92,   92,   79,   94,   94,   96,   99,   98,  115,
           82,  116,   72,   73,  161,  162,  163,   84,  108,   87,
           91,   84,  133,  165,   84,  137,   96,  169,   88,  119,
          120,  165,  142,  102,  124,  169,    1,   98,  159,  152,
           99,   99,  132,  133,  134,  135,  136,   17,   18,   19,
           20,   21,   22,   23,   24,   25,   26,   27,   28,   29,
           30,  102,    1,  159,  124,   38,   39,   32,   72,  164,
          167,  172,   -1,   -1,   -1,  165,  138,    1,   -1,  169,
          170,  141,  142,  137,  144,  145,  146,  147,  148,  149,
          150,   61,   62,   32,   -1,  152,   -1,  157,  158,  155,
          155,   -1,   72,   76,    0,    1,  155,  167,   32,   82,
          155,  155,  172,  173,  161,  165,   89,   90,   91,  167,
           93,   86,   95,  160,   97,  165,  165,  100,  166,   38,
           39,  165,  105,  106,  107,  139,  140,  165,  111,  112,
          165,  165,  165,  165,  117,  118,  165,   86,  165,  165,
          165,  155,  165,  165,  165,  165,  129,  165,  165,  165,
          169,  166,   86,  167,  166,  166,  166,   76,  166,  139,
          140,  167,  167,   82,  167,  167,  167,   72,   73,  167,
           89,   90,   91,  167,   93,  155,   95,  160,   97,   84,
           86,  100,  167,   88,  168,  167,  105,  106,  107,  167,
          165,  167,  111,  112,  169,  167,  167,  167,  117,  118,
          167,  167,  108,  167,  110,   72,   73,  167,  167,  115,
          129,  167,  167,  119,  120,  167,  165,   84,  124,  124,
          169,   88,  167,  167,  167,  167,  132,  133,  134,  135,
          136,  165,  167,  169,  167,  169,  167,  142,  167,  144,
          145,  146,  147,  148,  149,  150,  167,  167,  170,  167,
          156,   32,  157,  158,  167,  167,  167,  124,  167,  165,
          167,  169,  167,  169,  170,  168,  168,  172,  173,  168,
          168,  168,  168,  168,  168,  142,  168,  144,  145,  146,
          147,  148,  149,  150,   32,  168,  168,  168,  168,  168,
          157,  158,    1,  168,  168,   76,  168,  168,  168,  168,
          167,   82,  168,  168,  168,  172,  173,  168,   89,   90,
           91,  168,   93,  168,   95,    1,   97,  168,  168,  100,
          168,  168,    1,  168,  105,  106,  107,  168,   76,  168,
          111,  112,  168,  168,   82,  168,  117,  118,  168,  168,
          168,   89,   90,   91,  168,   93,  168,   95,  129,   97,
          168,  168,  100,   32,  168,  168,  168,  105,  106,  107,
          169,   76,  169,  111,  112,  169,  169,   82,  169,  117,
          118,  169,  169,  169,   89,   90,   91,   86,   93,   31,
           95,  129,   97,  169,    1,  100,  169,  169,  173,  169,
          105,  106,  107,  102,  103,  104,  111,  112,  170,  108,
           86,  170,  117,  118,  170,   84,  170,  170,  170,  170,
          119,  120,  170,  170,  129,  124,  102,  103,  104,  170,
          170,  170,  108,  132,  133,  134,  135,  136,  170,  170,
          170,  170,  170,  119,  120,  170,  170,  170,  124,  170,
          119,  120,  170,  170,  170,  124,  132,  133,  134,  135,
          136,  170,  167,  170,  133,  171,  165,  170,   -1,   -1,
          169,  170,   -1,  142,   -1,   -1,  118,   84,  120,  121,
          122,  123,  124,  125,  126,  127,   -1,   -1,   -1,  165,
           -1,   -1,   -1,  169,  170,  164,   -1,   -1,  167,   -1,
           -1,  143,   -1,   -1,  173,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,  119,  120,   -1,   -1,   -1,  124,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,  167,  133,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,  142,   -1,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,  164,   -1,   -1,
          167,   -1,   -1,   -1,   -1,   -1,  173
    );

    protected array $actionBase = array(
            0,  156,   -3,  315,  474,  474,  880, 1074, 1271, 1294,
          749,  675,  531,  559,  836, 1031, 1031, 1046, 1031,  828,
         1005,   42,   59,   59,   59,  963,  898,  632,  632,  898,
          632,  997,  997,  997,  997, 1061, 1061,  -63,  -63,   96,
         1232, 1199,  255,  255,  255,  255,  255, 1265,  255,  255,
          255,  255,  255, 1265,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,  255,  255,  255,
          255,  255,  255,  255,  255,  255,  255,   77,  194,  120,
          205, 1197,  783, 1150, 1163, 1152, 1166, 1145, 1144, 1151,
         1156, 1167, 1261, 1263,  889, 1254, 1267, 1158,  972, 1147,
         1162,  962,  616,  616,  616,  616,  616,  616,  616,  616,
          616,  616,  616,  616,  616,  616,  616,  616,  616,  616,
          616,  616,  616,  616,  616,  616,  616,  616,  616,   19,
           35,  535,   41,   41,   41,   41,   41,   41,   41,   41,
           41,   41,   41,   41,   41,   41,   41,   41,   41,   41,
           41,   41,  529,  529,  529,  910,  910,  524,  299, 1113,
         1075, 1113, 1113, 1113, 1113, 1113, 1113, 1113, 1113,  140,
           28, 1000,  493,  493,  458,  458,  458,  458,  458,  696,
         1328, 1301,  171,  171,  171,  171, 1363, 1363,  -70,  523,
          248,  756,  291,  197,  -87,  644,   38,  199,  323,  323,
          482,  482,  233,  233,  482,  482,  482,  324,  324,   94,
           94,   94,   94,   82,  249,  860,   67,   67,   67,   67,
          860,  860,  860,  860,  913,  869,  860, 1036, 1049,  860,
          860,  370,  645,  966,  646,  646,  398,  -72,  -72,  398,
           64,  -72,  294,  286,  257,  859,   91,  433,  257, 1073,
          404,  686,  686,  815,  686,  686,  686,  923,  610,  923,
         1141,  902,  902,  861,  807,  964, 1198, 1168,  901, 1252,
          929, 1253, 1200,  342,  251,  -56,  263,  550,  806, 1139,
         1139, 1139, 1139, 1139, 1139, 1139, 1139, 1139, 1139, 1139,
         1139, 1195,  523, 1141,  -25, 1247, 1249, 1195, 1195, 1195,
          523,  523,  523,  523,  523,  523,  523,  523,  870,  523,
          523,  694,  -25,  625,  635,  -25,  896,  523,  915,   77,
           77,   77,   77,   77,   77,   77,   77,   77,   77,   77,
          178,   77,   77,  194,   13,   13,   77,  200,  121,   13,
           13,   13,  -11,   13,   77,   77,   77,  610,  886,  849,
          663,  283,  874,  114,  886,  886,  886,   71,    9,   76,
          809,  888,  288,  882,  882,  882,  907,  986,  986,  882,
          903,  882,  907,  882,  882,  986,  986,  875,  986,  274,
          620,  465,  597,  624,  986,  340,  882,  882,  882,  882,
          916,  986,  127,  139,  639,  882,  329,  287,  882,  882,
          916,  858,  876,  908,  986,  986,  986,  916,  545,  908,
          908,  908,  931,  936,  864,  872,  445,  431,  679,  232,
          924,  872,  872,  882,  605,  864,  872,  864,  872,  933,
          872,  872,  872,  864,  872,  903,  533,  872,  813,  665,
          218,  872,  882,   20, 1008, 1009,  800, 1010, 1002, 1013,
         1069, 1014, 1016, 1171,  982, 1028, 1004, 1020, 1071,  998,
          995,  885,  792,  793,  921,  914,  979,  897,  897,  897,
          975,  977,  897,  897,  897,  897,  897,  897,  897,  897,
          792,  932,  926,  899, 1037,  796,  810, 1114,  857, 1214,
         1264, 1036, 1008, 1016,  804, 1004, 1020,  998,  995,  856,
          853,  844,  851,  843,  840,  808,  814,  871, 1116, 1119,
         1021,  920,  811, 1085, 1038, 1211, 1044, 1045, 1047, 1088,
         1123,  942, 1125, 1216,  895, 1217, 1218,  965, 1051, 1173,
          897,  974,  873,  968, 1049,  978,  792,  969, 1129, 1130,
         1081,  961, 1097, 1098, 1072,  911,  884,  970, 1219, 1059,
         1060, 1062, 1176, 1177,  930, 1082,  996, 1099,  912, 1058,
         1100, 1101, 1105, 1106, 1179, 1222, 1182,  922, 1183,  945,
          879, 1077,  909, 1223,  165,  892,  893,  906, 1068,  683,
         1035, 1184, 1208, 1229, 1108, 1109, 1110, 1230, 1231, 1024,
          946, 1083,  900, 1084, 1078,  947,  948,  689,  905, 1132,
          890,  891,  904,  705,  768, 1238, 1239, 1240, 1025,  877,
          894,  951,  953, 1133,  887, 1135, 1241,  771,  954, 1242,
         1115,  816,  817,  521,  784,  747,  818,  881, 1194,  925,
          865,  878, 1067,  817,  883,  955, 1245,  957,  958,  959,
         1111,  960, 1086, 1246,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  632,  632,  632,
          632,  789,  789,  789,  789,  789,  789,  789,  632,  789,
          789,  789,  632,  632,    0,    0,  632,    0,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  789,  789,  789,  789,  789,  789,
          789,  789,  789,  789,  616,  616,  616,  616,  616,  616,
          616,  616,  616,  616,  616,  616,  616,  616,  616,  616,
          616,  616,  616,  616,  616,  616,  616,  616,  616,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,  616,  616,  616,  616,
          616,  616,  616,  616,  616,  616,  616,  616,  616,  616,
          616,  616,  616,  616,  616,  616,  616,  616,  616,  616,
          616,  616,  823,  823,  616,  616,  823,  823,  823,  823,
          823,  823,  823,  823,  823,  823,  616,  616,    0,  616,
          616,  616,  616,  616,  616,  616,  875,  823,  823,  324,
          324,  324,  324,  823,  823,  396,  396,  396,  823,  324,
          823,   64,  324,  823,   64,  823,  823,  823,  823,  823,
          823,  823,  823,  823,    0,    0,  823,  823,  823,  823,
          -25,  -72,  823,  903,  903,  903,  903,  823,  823,  823,
          823,  -72,  -72,  823,  -57,  -57,  823,  823,    0,    0,
            0,  324,  324,  -25,    0,    0,  -25,    0,    0,  903,
          903,  823,   64,  875,  446,  823,  342,    0,    0,    0,
            0,    0,    0,    0,  -25,  903,  -25,  523,  -72,  -72,
          523,  523,   13,   77,  446,  612,  612,  612,  612,   77,
            0,    0,    0,    0,    0,  610,  875,  875,  875,  875,
          875,  875,  875,  875,  875,  875,  875,  875,  903,    0,
          875,    0,  875,  875,  903,  903,  903,    0,    0,    0,
            0,    0,    0,    0,    0,  986,    0,    0,    0,    0,
            0,    0,    0,  903,    0,  986,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,  903,    0,    0,    0,    0,
            0,    0,    0,    0,    0,  897,  911,    0,    0,  911,
            0,  897,  897,  897,    0,    0,    0,  905,  887
    );

    protected array $actionDefault = array(
            3,32767,32767,32767,  102,  102,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,  100,
        32767,  632,  632,  632,  632,32767,32767,  257,  102,32767,
        32767,  503,  417,  417,  417,32767,32767,32767,  576,  576,
          576,  576,  576,   17,32767,32767,32767,32767,32767,32767,
        32767,  503,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,   36,    7,    8,   10,   11,   49,  338,  100,
        32767,32767,32767,32767,32767,32767,32767,32767,  102,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,  404,  625,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,  497,  507,  485,  486,  488,  489,  416,  577,
          631,  344,  628,  342,  415,  146,  354,  343,  245,  261,
          508,  262,  509,  512,  513,  218,  401,  150,  151,  448,
          504,  450,  502,  506,  449,  422,  429,  430,  431,  432,
          433,  434,  435,  436,  437,  438,  439,  440,  441,  420,
          421,  505,  482,  481,  480,32767,32767,  446,  447,32767,
        32767,32767,32767,32767,32767,32767,32767,  102,32767,  451,
          454,  419,  452,  453,  470,  471,  468,  469,  472,32767,
          323,32767,  473,  474,  475,  476,32767,32767,  382,  196,
          380,32767,  477,32767,  111,  455,  323,  111,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,  461,  462,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,  102,32767,32767,32767,
          100,  520,  570,  479,  456,  457,32767,  545,32767,  102,
        32767,  547,32767,32767,32767,32767,32767,32767,32767,32767,
          572,  443,  445,  540,  626,  423,  629,32767,  533,  100,
          196,32767,  546,  196,  196,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,  571,32767,  639,  533,  110,
          110,  110,  110,  110,  110,  110,  110,  110,  110,  110,
          110,32767,  196,  110,32767,  110,  110,32767,32767,  100,
          196,  196,  196,  196,  196,  196,  196,  196,  548,  196,
          196,  191,32767,  271,  273,  102,  594,  196,  550,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,  404,32767,32767,32767,32767,  533,  466,  139,
        32767,  535,  139,  578,  458,  459,  460,  578,  578,  578,
          319,  296,32767,32767,32767,32767,32767,  548,  548,  100,
          100,  100,  100,32767,32767,32767,32767,  111,  519,   99,
           99,   99,   99,   99,  103,  101,32767,32767,32767,32767,
          226,32767,  101,  101,   99,32767,  101,  101,32767,32767,
          226,  228,  215,  230,32767,  598,  599,  226,  101,  230,
          230,  230,  250,  250,  522,  325,  101,   99,  101,  101,
          198,  325,  325,32767,  101,  522,  325,  522,  325,  200,
          325,  325,  325,  522,  325,32767,  101,  325,  217,   99,
           99,  325,32767,32767,32767,32767,  535,32767,32767,32767,
        32767,32767,32767,32767,  225,32767,32767,32767,32767,32767,
        32767,32767,32767,  565,32767,  583,  596,  464,  465,  467,
          582,  580,  490,  491,  492,  493,  494,  495,  496,  499,
          627,32767,  539,32767,32767,32767,  353,32767,  637,32767,
        32767,32767,    9,   74,  528,   42,   43,   51,   57,  554,
          555,  556,  557,  551,  552,  558,  553,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,  638,32767,  578,32767,32767,32767,32767,
          463,  560,  604,32767,32767,  579,  630,32767,32767,32767,
        32767,32767,32767,32767,32767,  139,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,  565,32767,  137,32767,
        32767,32767,32767,32767,32767,32767,32767,  561,32767,32767,
        32767,  578,32767,32767,32767,32767,  321,  318,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,  578,32767,32767,32767,32767,32767,
          298,32767,  315,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,  400,  535,  301,  303,  304,32767,32767,32767,32767,
          376,32767,32767,32767,32767,32767,32767,32767,32767,32767,
        32767,32767,32767,32767,  153,  153,    3,    3,  356,  153,
          153,  153,  356,  356,  153,  356,  356,  356,  153,  153,
          153,  153,  153,  153,  153,  283,  186,  265,  268,  250,
          250,  153,  368,  153,  402,  402,  411
    );

    protected array $goto = array(
          201,  169,  201,  201,  201, 1069,  598,  719,  448,  684,
          644,  681,  443,  345,  341,  342,  344,  615,  447,  346,
          449,  661,  481,  728,  570,  570,  570,  570, 1245,  626,
          172,  172,  172,  172,  225,  202,  198,  198,  182,  184,
          220,  198,  198,  198,  198,  198, 1195,  199,  199,  199,
          199,  199, 1195,  192,  193,  194,  195,  196,  197,  222,
          220,  223,  557,  558,  438,  559,  562,  563,  564,  565,
          566,  567,  568,  569,  173,  174,  175,  200,  176,  177,
          178,  170,  179,  180,  181,  183,  219,  221,  224,  242,
          247,  248,  259,  260,  262,  263,  264,  265,  266,  267,
          268,  272,  273,  274,  275,  282,  285,  297,  298,  324,
          325,  444,  445,  446,  620,  226,  227,  228,  229,  230,
          231,  232,  233,  234,  235,  236,  237,  238,  239,  240,
          241,  193,  194,  195,  196,  197,  222,  203,  204,  205,
          206,  243,  185,  186,  207,  187,  208,  204,  188,  244,
          203,  168,  209,  210,  189,  211,  212,  213,  190,  214,
          215,  171,  216,  217,  218,  191,  287,  284,  287,  287,
          883,  255,  255,  255,  255,  255, 1125,  605,  487,  487,
          622,  758,  660,  662, 1103,  359,  682,  487, 1075, 1074,
          706,  709, 1041,  717,  726, 1037,  733,  922,  879,  922,
          922,  253,  253,  253,  253,  250,  256,  646,  646, 1078,
         1079, 1332, 1332, 1332, 1332, 1332, 1332, 1332, 1332, 1332,
         1332,  880,  351,  938,  933,  934,  947,  889,  935,  886,
          936,  937,  887,  890,  476,  941,  894,  476, 1044, 1044,
          893,  364,  364,  364,  364,  352,  351,  532, 1131, 1127,
         1128, 1351, 1351,  331,  315, 1351, 1351, 1351, 1351, 1351,
         1351, 1351, 1351, 1351, 1351, 1069, 1301, 1072, 1072,  704,
          983, 1301, 1301, 1064, 1080, 1081, 1069,  942, 1301,  943,
          458, 1069,  881, 1069, 1069, 1069, 1069, 1069, 1069, 1069,
         1069, 1069,  897,  855, 1069, 1069, 1069, 1069,  677,  678,
         1301,  695,  696,  697, 1006, 1301, 1301, 1301, 1301,  450,
          909, 1301,  436,  896, 1301, 1301, 1382, 1382, 1382, 1382,
          915,  581,  574,  499,  612,  450,  367,  971,  971,  955,
          501, 1076, 1076,  956, 1400, 1400,  367,  367,  688, 1087,
         1083, 1084,  572,  411,  414,  623,  627,  572,  572,  367,
          367, 1400,  357,  367,  572, 1417, 1377, 1378,  317,  574,
          581,  607,  608,  318,  618,  624, 1390,  640,  641, 1027,
          576, 1403, 1403,  367,  367,   28,  474,  520,  442,  521,
          635, 1000, 1000, 1000, 1000,  527,  409,  474, 1348, 1348,
          994, 1001, 1348, 1348, 1348, 1348, 1348, 1348, 1348, 1348,
         1348, 1348,  633,  647,  650,  651,  652,  653,  674,  675,
          676,  730,  732,  561,  561,  258,  258,  561,  561,  561,
          561,  561,  561,  561,  561,  561,  561,  610, 1362,  467,
          683,  467,  876,  616,  638,  876,  467,  467, 1191,  861,
         1373,  360,  361, 1093,  456, 1373, 1373,  560,  560,  705,
          432,  560, 1373,  560,  560,  560,  560,  560,  560,  560,
          560, 1277,  975,  575,  602,  575, 1278, 1281,  976,  575,
         1282,  602,  689,  412,  480, 1384, 1384, 1384, 1384,  347,
          873,  716,  576,  861,  876,  861,  490,  619,  491,  492,
          639,    8,  857,    9,  902,  907,  989,  716, 1408, 1409,
          716, 1369,  418, 1296,  278,  899,  330, 1174,  424,  425,
         1292,  330,  330,  693, 1049,  694, 1114,  429,  430,  431,
          761,  707, 1060,  905,  433, 1102, 1104, 1107,  355,  467,
          467,  467,  467,  467,  467,  467,  467,  467,  467,  467,
          467,  419,  339,  467,  911,  467,  467, 1294,  628,  629,
         1116,  497,  960, 1181,  621, 1144, 1371, 1371, 1116, 1118,
         1297, 1298, 1011, 1284, 1046, 1151, 1179, 1152,  731,  871,
          528,  722,  901, 1142,  687, 1025, 1284,  496, 1375, 1376,
          895,  910,  898, 1113, 1117,  998,  427,  727, 1165, 1299,
         1359, 1360, 1291, 1030,  386, 1009, 1002,    0,  757,    0,
            0,  573, 1039, 1034,  654,  656,  658,    0,    0,    0,
            0,    0,    0,    0,    0,  876,    0,    0,  999,    0,
          766,  766,    0,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,    0,    0,    0,    0,    0,    0,
         1163,  914
    );

    protected array $gotoCheck = array(
           42,   42,   42,   42,   42,   73,  127,   73,   66,   66,
           56,   56,   66,   66,   66,   66,   66,   66,   66,   66,
           66,   66,  159,    9,  107,  107,  107,  107,  159,  107,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
<<<<<<< HEAD
           42,   42,   42,   15,   20,   49,   23,   23,   23,   23,
          108,  108,   43,   97,  108,  130,  108,  108,  108,  108,
          108,  108,  108,  108,  108,  170,  170,    8,    8,  170,
            8,  170,  170,  170,  170,  170,  170,  170,  170,  170,
            8,    8,    6,    8,   83,   76,   76,   15,   12,   15,
           15,   15,   15,   15,   15,   15,   15,   15,   15,   20,
           20,   15,  155,   45,  155,    5,    5,   20,  144,  144,
          155,   15,   15,   15,   15,   76,   76,   76,   76,   76,
           76,   76,   76,   76,   76,   20,   20,   20,   12,   83,
           12,   76,    5,    5,    5,    5,    5,    5,    7,  172,
           73,    7,   73,   25,   25,   25,   25,   73,   73,   73,
            7,  179,  168,   73,    7,   73,   73,   73,   73,   73,
           73,   73,   73,   73,   22,  181,   73,   73,   73,   73,
            9,    9,    9,    9,   73,  168,  168,  118,  118,   73,
           73,   73,   73,   35,  103,   73,   73,   73,   65,   14,
           65,   24,   24,   24,   24,  149,  149,   84,   35,   14,
           14,   35,   62,   73,  149,   84,  104,   73,   93,   93,
           93,    9,   14,   14,    9,   22,   14,   64,   14,   81,
           81,   81,   81,   81,   81,   81,   81,   81,   81,   14,
          150,  171,  171,   14,   14,  171,  114,  171,  171,  171,
          171,  171,  171,  171,  171,  171,  173,  173,  151,   13,
          173,   13,  173,  173,  173,  173,  173,  173,  173,  173,
          173,   48,  116,  182,  182,   48,   48,   48,  119,  119,
           48,  176,  176,  176,   48,   48,   48,   48,   48,   48,
          182,   14,  113,   82,   82,   85,   85,   85,   82,   46,
           82,   46,   82,   82,   82,   29,   82,  182,  182,   82,
          169,  169,   14,   82,   97,   97,    9,    9,   23,   23,
           23,    9,  130,    9,  130,  120,    9,    9,   18,  178,
          178,  130,  107,  107,  107,  107,   39,  107,    9,    9,
            9,    9,   28,   14,    9,   22,   92,    9,    9,    2,
            2,   37,   19,   80,   19,    5,    5,  130,  130,  130,
          130,   19,   50,  110,  157,   50,  160,   50,   99,   16,
           16,   16,   16,    9,   41,   50,   50,   50,  129,  132,
           16,   96,   -1,  130,  147,   -1,   19,   -1,   -1,   -1,
           -1,   19,   19,   19,   19,   -1,   -1,   19,   19,   19,
           -1,   -1,   -1,   -1,   16,   -1,   14,   -1,   -1,   -1,
           23,   23,   23,   23,   23,   23,   23,   23,   23,   23,
           23,   17,   17,   23,   -1,  130,   16,   16,   17,  130,
          130,  130,   79,   79,   17,  117,   79,   79,   79,   79,
           -1,  117,   17,   -1,   17,   17,   -1,  117,  117,   -1,
           17,   -1,   -1,   -1,  117,  117,  117,  117,   -1,   -1,
           -1,   -1,   17,   24,   24,   24,   89,   89,   89,   89,
           -1,   -1,   89,   89,   89,   59,   59,   59,   59,   59,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,  107,  107
    );

    protected array $gotoBase = array(
            0,    0, -253,    0,    0,  224,  182,  251,  179,  -10,
            0,    0,  -89,   32,   11, -185,   27,   66,  128,  197,
         -229,    0,    5,  163,  308,  260,   18,   22,  115,  118,
            0,    0,    0,    0,    0,  -68,    0,  122,    0,  123,
            0,   43,   -1,  153,    0,  200, -327,    0, -330,  147,
          460,    0,    0,    0,    0,    0,  -33,    0,    0,  540,
            0,    0,  280,    0,   95,  294, -236,    0,    0,    0,
            0,    0,    0,   -5,    0,    0, -140,    0,    0,  134,
          119,  -19,  -88,  -75, -152,  -74, -698,    0,    0,  296,
            0,    0,  127,   23,    0,    0,   48, -310,    0,   71,
            0,    0,    0,  269,  283,    0,    0,  414,  -71,    0,
          103,    0,    0,  124,   83,    0,  100,  273,   17,  104,
          144,    0,    0,    0,    0,    0,    0,    1,    0,  114,
          167,    0,   47,    0,    0,    0,    0,    0,    0,    0,
            0,    0,    0,    0,  -47,    0,    0,   50,    0,  281,
          105,   94,    0,    0,    0, -273,    0,   34,    0,    0,
          107,    0,    0,    0,    0,    0,    0,    0,  -26,   99,
          -56,  110,  230,  125,    0,    0,   90,    0,   67,  241,
            0,  254,   75,    0,    0
    );

    protected array $gotoDefault = array(
        -32768,  512,  740,    4,  741,  935,  816,  825,  597,  530,
          707,  348,  625,  422, 1303,  911, 1122,  578,  844, 1246,
         1254,  457,  847,  330,  730,  923,  894,  895,  400,  386,
          392,  398,  649,  626,  494,  879,  453,  871,  486,  874,
          452,  883,  164,  418,  510,  887,    3,  890,  557,  921,
          973,  387,  898,  388,  677,  900,  562,  902,  903,  395,
          401,  402, 1127,  570,  622,  915,  256,  564,  916,  385,
          917,  925,  390,  393,  688,  465,  505,  499,  411, 1102,
          565,  608,  646,  447,  473,  620,  632,  618,  480,  434,
          416,  329,  957,  965,  487,  463,  979,  350,  987,  738,
         1135,  640,  489,  995,  641, 1002, 1005,  531,  532,  478,
         1017,  272, 1020,  490,   19,  667, 1031, 1032,  668,  642,
         1054,  643,  669,  644, 1056,  472,  598, 1064,  454, 1072,
         1291,  455, 1076,  266, 1079,  278,  417,  435, 1085, 1086,
            9, 1092,  698,  699,   11,  276,  509, 1117,  689,  451,
         1134,  439, 1204, 1206,  558,  491, 1224, 1223,  680,  506,
         1229,  448, 1294,  449,  533,  474,  316,  534, 1338,  308,
          333,  313,  549,  295,  334,  535,  475, 1300, 1308,  331,
           31, 1328, 1339,  575,  613
=======
           42,   42,   42,   42,   42,   42,   23,   23,   23,   23,
           15,    5,    5,    5,    5,    5,   15,   48,  157,  157,
          134,   48,   48,   48,  131,   97,   48,  157,  119,  119,
           48,   48,   48,   48,   48,   48,   48,   25,   25,   25,
           25,    5,    5,    5,    5,    5,    5,  108,  108,  120,
          120,  108,  108,  108,  108,  108,  108,  108,  108,  108,
          108,   26,  177,   15,   15,   15,   15,   15,   15,   15,
           15,   15,   15,   15,   83,   15,   15,   83,  107,  107,
           15,   24,   24,   24,   24,  177,  177,   76,   15,   15,
           15,  179,  179,  178,  178,  179,  179,  179,  179,  179,
          179,  179,  179,  179,  179,   73,   73,   89,   89,   89,
           89,   73,   73,   89,   89,   89,   73,   65,   73,   65,
           83,   73,   27,   73,   73,   73,   73,   73,   73,   73,
           73,   73,   35,    6,   73,   73,   73,   73,   86,   86,
           73,   86,   86,   86,   49,   73,   73,   73,   73,  118,
           35,   73,   43,   35,   73,   73,    9,    9,    9,    9,
           45,   76,   76,   84,  181,  118,   14,    9,    9,   73,
           84,  118,  118,   73,  191,  191,   14,   14,  118,  118,
          118,  118,   19,   59,   59,   59,   59,   19,   19,   14,
           14,  191,  188,   14,   19,   14,  187,  187,   76,   76,
           76,   76,   76,   76,   76,   76,  190,   76,   76,  103,
           14,  191,  191,   14,   14,   76,   19,  163,   13,  163,
           13,   19,   19,   19,   19,  163,   62,   19,  180,  180,
           19,   19,  180,  180,  180,  180,  180,  180,  180,  180,
          180,  180,   81,   81,   81,   81,   81,   81,   81,   81,
           81,   81,   81,  182,  182,    5,    5,  182,  182,  182,
          182,  182,  182,  182,  182,  182,  182,  104,   14,   23,
           64,   23,   22,    2,    2,   22,   23,   23,  158,   12,
          134,   97,   97,  115,  113,  134,  134,  165,  165,  117,
           14,  165,  134,  165,  165,  165,  165,  165,  165,  165,
          165,   79,   79,    9,    9,    9,   79,   79,   79,    9,
           79,    9,  121,    9,    9,  134,  134,  134,  134,   29,
           18,    7,   14,   12,   22,   12,    9,    9,    9,    9,
           80,   46,    7,   46,   39,    9,   92,    7,    9,    9,
            7,  134,   28,   20,   24,   37,   24,  156,   82,   82,
          169,   24,   24,   82,  110,   82,  133,   82,   82,   82,
           99,   82,  114,    9,   82,  130,  130,  130,   82,   23,
           23,   23,   23,   23,   23,   23,   23,   23,   23,   23,
           23,   31,    9,   23,   41,   23,   23,   14,   17,   17,
          134,  160,   17,   17,    8,    8,  134,  134,  134,  136,
           20,   20,   96,   20,   17,  149,  149,  149,    8,   20,
            8,    8,   17,    8,   17,   17,   20,  185,  185,  185,
           17,   16,   16,   16,   16,   93,   93,   93,  152,   20,
           20,   20,   17,   50,  141,   16,   50,   -1,   50,   -1,
           -1,   50,   50,   50,   85,   85,   85,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   22,   -1,   -1,   16,   -1,
           24,   24,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,   -1,
           16,   16
    );

    protected array $gotoBase = array(
            0,    0, -303,    0,    0,  170,  280,  471,  543,   10,
            0,    0,  136,   31,   22, -186,  111,   66,  164,   71,
           95,    0,  148,  160,  235,  191,  214,  275,  155,  176,
            0,   86,    0,    0,    0,  -92,    0,  156,    0,  165,
            0,   85,   -1,  286,    0,  291, -270,    0, -558,  284,
          579,    0,    0,    0,    0,    0,  -33,    0,    0,  294,
            0,    0,  341,    0,  184,  261, -237,    0,    0,    0,
            0,    0,    0,   -5,    0,    0,  -32,    0,    0,   37,
          172,   32,   -3,  -50, -167,  105, -444,    0,    0,  -21,
            0,    0,  161,  274,    0,    0,  101, -318,    0,   97,
            0,    0,    0,  331,  381,    0,    0,   -7,  -38,    0,
          131,    0,    0,  158,   90,  162,    0,  159,   39, -100,
          -83,  173,    0,    0,    0,    0,    0,    4,    0,    0,
          522,  182,    0,  127,  169,    0,   99,    0,    0,    0,
            0, -171,    0,    0,    0,    0,    0,    0,    0,  287,
            0,    0,  126,    0,    0,    0,  144,  141,  188, -255,
           93,    0,    0, -138,    0,  202,    0,    0,    0,  128,
            0,    0,    0,    0,    0,    0,    0,  -82,  -74,    6,
          143,  292,  168,    0,    0,  270,    0,  -31,  319,    0,
          332,   20,    0,    0
    );

    protected array $gotoDefault = array(
        -32768,  533,  768,    7,  769,  964,  844,  853,  597,  551,
          729,  356,  648,  439, 1367,  940, 1180,  617,  872, 1310,
         1316,  475,  875,  336,  755,  952,  923,  924,  415,  402,
          888,  413,  672,  649,  514,  908,  471,  900,  506,  903,
          470,  912,  167,  435,  530,  916,    6,  919,  579,  950,
         1004,  403,  927,  404,  700,  929,  601,  931,  932,  410,
          416,  417, 1185,  609,  645,  944,  261,  603,  945,  401,
          946,  954,  406,  408,  710,  486,  525,  519,  428, 1146,
          604,  632,  669,  464,  493,  643,  655,  642,  500,  451,
          434,  335,  988,  996,  507,  484, 1010,  358, 1018,  763,
         1193,  663,  509, 1026,  664, 1033, 1036,  552,  553,  498,
         1048,  270, 1051,  510, 1061,   26,  690, 1066, 1067,  691,
          665, 1089,  666,  692,  667, 1091,  483,  599, 1194,  482,
         1106, 1112,  472, 1115, 1356,  473, 1119,  269, 1122,  286,
          362,  385,  452, 1129, 1130,   12, 1136,  720,  721,   25,
          280,  529, 1164,  711, 1170,  279, 1173,  469, 1192,  468,
         1265, 1267,  580,  511, 1285,  321, 1288,  703,  526, 1293,
          465, 1358,  466,  554,  494,  343,  555, 1401,  314,  365,
          340,  571,  322,  366,  556,  495, 1364, 1372,  337,   34,
         1391, 1402,  614,  637
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    );

    protected array $ruleToNonTerminal = array(
            0,    1,    3,    3,    2,    5,    5,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    6,    6,    6,
            6,    6,    6,    6,    6,    6,    6,    7,    7,    7,
            7,    7,    7,    7,    7,    8,    8,    9,   10,   11,
           11,   11,   12,   12,   13,   13,   14,   15,   15,   16,
           16,   17,   17,   18,   18,   21,   21,   22,   23,   23,
           24,   24,    4,    4,    4,    4,    4,    4,    4,    4,
<<<<<<< HEAD
            4,    4,    4,   29,   29,   30,   30,   32,   34,   34,
           28,   36,   36,   33,   38,   38,   35,   35,   37,   37,
           39,   39,   31,   40,   40,   41,   43,   44,   44,   45,
           45,   46,   46,   48,   47,   47,   47,   47,   49,   49,
           49,   49,   49,   49,   49,   49,   49,   49,   49,   49,
           49,   49,   49,   49,   49,   49,   49,   49,   49,   49,
           49,   49,   25,   25,   50,   69,   69,   72,   72,   71,
           70,   70,   63,   75,   75,   76,   76,   77,   77,   78,
           78,   79,   79,   80,   80,   26,   26,   27,   27,   27,
           27,   27,   88,   88,   90,   90,   83,   83,   91,   91,
           92,   92,   92,   84,   84,   87,   87,   85,   85,   93,
           94,   94,   57,   57,   65,   65,   68,   68,   68,   67,
           95,   95,   96,   58,   58,   58,   58,   97,   97,   98,
           98,   99,   99,  100,  101,  101,  102,  102,  103,  103,
           55,   55,   51,   51,  105,   53,   53,  106,   52,   52,
           54,   54,   64,   64,   64,   64,   81,   81,  109,  109,
          111,  111,  112,  112,  112,  112,  110,  110,  110,  114,
          114,  114,  114,   89,   89,  117,  117,  117,  118,  118,
          115,  115,  119,  119,  121,  121,  122,  122,  116,  123,
          123,  120,  124,  124,  124,  124,  113,  113,   82,   82,
           82,   20,   20,   20,  126,  125,  125,  127,  127,  127,
          127,   60,  128,  128,  129,   61,  131,  131,  132,  132,
          133,  133,   86,  134,  134,  134,  134,  134,  134,  134,
          139,  139,  140,  140,  141,  141,  141,  141,  141,  142,
          143,  143,  138,  138,  135,  135,  137,  137,  145,  145,
          144,  144,  144,  144,  144,  144,  144,  136,  146,  146,
          148,  147,  147,   62,  104,  149,  149,   56,   56,   42,
=======
            4,    4,    4,    4,   29,   29,   30,   30,   32,   34,
           34,   28,   36,   36,   33,   38,   38,   35,   35,   37,
           37,   39,   39,   31,   40,   40,   41,   43,   44,   44,
           45,   45,   46,   46,   48,   47,   47,   47,   47,   49,
           49,   49,   49,   49,   49,   49,   49,   49,   49,   49,
           49,   49,   49,   49,   49,   49,   49,   49,   49,   49,
           49,   49,   49,   25,   25,   50,   69,   69,   72,   72,
           71,   70,   70,   63,   75,   75,   76,   76,   77,   77,
           78,   78,   79,   79,   80,   80,   80,   80,   26,   26,
           27,   27,   27,   27,   27,   88,   88,   90,   90,   83,
           83,   91,   91,   92,   92,   92,   84,   84,   87,   87,
           85,   85,   93,   94,   94,   57,   57,   65,   65,   68,
           68,   68,   67,   95,   95,   96,   58,   58,   58,   58,
           97,   97,   98,   98,   99,   99,  100,  101,  101,  102,
          102,  103,  103,   55,   55,   51,   51,  105,   53,   53,
          106,   52,   52,   54,   54,   64,   64,   64,   64,   81,
           81,  109,  109,  111,  111,  112,  112,  112,  112,  112,
          112,  112,  112,  110,  110,  110,  115,  115,  115,  115,
           89,   89,  118,  118,  118,  119,  119,  116,  116,  120,
          120,  122,  122,  123,  123,  117,  124,  124,  121,  125,
          125,  125,  125,  113,  113,   82,   82,   82,   20,   20,
           20,  128,  128,  128,  128,  129,  129,  129,  127,  126,
          126,  131,  131,  131,  130,  130,   60,  132,  132,  133,
           61,  135,  135,  136,  136,  137,  137,   86,  138,  138,
          138,  138,  138,  138,  138,  138,  144,  144,  145,  145,
          146,  146,  146,  146,  146,  147,  148,  148,  143,  143,
          139,  139,  142,  142,  150,  150,  149,  149,  149,  149,
          149,  149,  149,  149,  149,  149,  140,  151,  151,  153,
          152,  152,  141,  141,  114,  114,  154,  154,  156,  156,
          156,  155,  155,   62,  104,  157,  157,   56,   56,   42,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
           42,   42,   42,   42,   42,   42,   42,   42,   42,   42,
<<<<<<< HEAD
           42,   42,   42,  156,  150,  150,  155,  155,  158,  159,
          159,  160,  161,  162,  162,  162,  162,   19,   19,   73,
           73,   73,   73,  151,  151,  151,  151,  164,  164,  152,
          152,  154,  154,  154,  157,  157,  170,  170,  170,  170,
          170,  170,  170,  170,  170,  171,  171,  171,  108,  173,
          173,  173,  173,  153,  153,  153,  153,  153,  153,  153,
          153,   59,   59,  167,  167,  167,  167,  174,  174,  163,
          163,  163,  175,  175,  175,  175,  175,  175,   74,   74,
           66,   66,   66,   66,  130,  130,  130,  130,  178,  177,
          166,  166,  166,  166,  166,  166,  166,  165,  165,  165,
          176,  176,  176,  176,  107,  172,  180,  180,  179,  179,
          181,  181,  181,  181,  181,  181,  181,  181,  169,  169,
          169,  169,  168,  183,  182,  182,  182,  182,  182,  182,
          182,  182,  184,  184,  184,  184
=======
           42,   42,   42,   42,   42,   42,  164,  165,  165,  166,
          158,  158,  163,  163,  167,  168,  168,  169,  170,  171,
          171,  171,  171,   19,   19,   73,   73,   73,   73,  159,
          159,  159,  159,  173,  173,  162,  162,  162,  160,  160,
          179,  179,  179,  179,  179,  179,  179,  179,  179,  179,
          180,  180,  180,  108,  182,  182,  182,  182,  161,  161,
          161,  161,  161,  161,  161,  161,   59,   59,  176,  176,
          176,  176,  176,  183,  183,  172,  172,  172,  172,  184,
          184,  184,  184,  184,   74,   74,   66,   66,   66,   66,
          134,  134,  134,  134,  187,  186,  175,  175,  175,  175,
          175,  175,  174,  174,  174,  185,  185,  185,  185,  107,
          181,  189,  189,  188,  188,  190,  190,  190,  190,  190,
          190,  190,  190,  178,  178,  178,  178,  177,  192,  191,
          191,  191,  191,  191,  191,  191,  191,  193,  193,  193,
          193
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    );

    protected array $ruleToLength = array(
            1,    1,    2,    0,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    0,
            1,    0,    1,    1,    2,    1,    3,    4,    1,    2,
            0,    1,    1,    1,    1,    4,    3,    5,    4,    3,
<<<<<<< HEAD
            4,    2,    3,    1,    1,    7,    6,    2,    3,    1,
            2,    3,    1,    2,    3,    1,    1,    3,    1,    3,
            1,    2,    2,    3,    1,    3,    2,    3,    1,    3,
            3,    2,    0,    1,    1,    1,    1,    1,    3,    7,
           10,    5,    7,    9,    5,    3,    3,    3,    3,    3,
            3,    1,    2,    5,    7,    9,    6,    5,    6,    3,
            2,    1,    1,    1,    1,    0,    2,    1,    3,    8,
            0,    4,    2,    1,    3,    0,    1,    0,    1,    0,
            1,    3,    1,    1,    1,    8,    9,    7,    8,    7,
            6,    8,    0,    2,    0,    2,    1,    2,    1,    2,
            1,    1,    1,    0,    2,    0,    2,    0,    2,    2,
            1,    3,    1,    4,    1,    4,    1,    1,    4,    2,
            1,    3,    3,    3,    4,    4,    5,    0,    2,    4,
            3,    1,    1,    7,    0,    2,    1,    3,    3,    4,
            1,    4,    0,    2,    5,    0,    2,    6,    0,    2,
            0,    3,    1,    2,    1,    1,    2,    0,    1,    3,
            0,    2,    1,    1,    1,    1,    6,    8,    6,    1,
            2,    1,    1,    1,    1,    1,    1,    1,    1,    3,
            3,    3,    1,    3,    3,    3,    3,    3,    1,    3,
            3,    1,    1,    2,    1,    1,    0,    1,    0,    2,
            2,    2,    4,    3,    1,    1,    3,    1,    2,    2,
            3,    2,    3,    1,    1,    2,    3,    1,    1,    3,
            2,    0,    1,    5,    5,    6,   10,    3,    5,    1,
            1,    3,    0,    2,    4,    5,    4,    4,    4,    3,
            1,    1,    1,    1,    1,    1,    0,    1,    1,    2,
            1,    1,    1,    1,    1,    1,    1,    2,    1,    3,
            1,    1,    3,    2,    2,    3,    1,    0,    1,    1,
            3,    3,    3,    4,    4,    1,    1,    2,    3,    3,
            3,    3,    3,    3,    3,    3,    3,    3,    3,    3,
            3,    2,    2,    2,    2,    3,    3,    3,    3,    3,
            3,    3,    3,    3,    3,    3,    3,    3,    3,    3,
            3,    3,    3,    2,    2,    2,    2,    3,    3,    3,
            3,    3,    3,    3,    3,    3,    3,    3,    5,    4,
            3,    4,    4,    2,    2,    4,    2,    2,    2,    2,
            2,    2,    2,    2,    2,    2,    2,    1,    3,    2,
            1,    2,    4,    2,    2,    8,    9,    8,    9,    9,
           10,    9,   10,    8,    3,    2,    0,    4,    2,    1,
            3,    2,    1,    2,    2,    2,    4,    1,    1,    1,
            1,    1,    1,    1,    1,    3,    1,    1,    1,    0,
            3,    0,    1,    1,    0,    1,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    3,    5,    3,    3,    4,
            1,    1,    3,    1,    1,    1,    1,    1,    3,    2,
            3,    0,    1,    1,    3,    1,    1,    1,    1,    1,
            3,    1,    1,    4,    4,    1,    4,    4,    0,    1,
            1,    1,    3,    3,    1,    4,    2,    2,    1,    3,
            1,    4,    4,    3,    3,    3,    3,    1,    3,    1,
            1,    3,    1,    1,    4,    1,    1,    1,    3,    1,
            1,    2,    1,    3,    4,    3,    2,    0,    2,    2,
            1,    2,    1,    1,    1,    4,    3,    3,    3,    3,
            6,    3,    1,    1,    2,    1
=======
            4,    1,    3,    4,    1,    1,    8,    7,    2,    3,
            1,    2,    3,    1,    2,    3,    1,    1,    3,    1,
            3,    1,    2,    2,    3,    1,    3,    2,    3,    1,
            3,    3,    2,    0,    1,    1,    1,    1,    1,    3,
            7,   10,    5,    7,    9,    5,    3,    3,    3,    3,
            3,    3,    1,    2,    5,    7,    9,    6,    5,    6,
            3,    2,    1,    1,    1,    1,    0,    2,    1,    3,
            8,    0,    4,    2,    1,    3,    0,    1,    0,    1,
            0,    1,    3,    1,    1,    1,    1,    1,    8,    9,
            7,    8,    7,    6,    8,    0,    2,    0,    2,    1,
            2,    1,    2,    1,    1,    1,    0,    2,    0,    2,
            0,    2,    2,    1,    3,    1,    4,    1,    4,    1,
            1,    4,    2,    1,    3,    3,    3,    4,    4,    5,
            0,    2,    4,    3,    1,    1,    7,    0,    2,    1,
            3,    3,    4,    1,    4,    0,    2,    5,    0,    2,
            6,    0,    2,    0,    3,    1,    2,    1,    1,    2,
            0,    1,    3,    0,    2,    1,    1,    1,    1,    1,
            1,    1,    1,    7,    9,    6,    1,    2,    1,    1,
            1,    1,    1,    1,    1,    1,    3,    3,    3,    1,
            3,    3,    3,    3,    3,    1,    3,    3,    1,    1,
            2,    1,    1,    0,    1,    0,    2,    2,    2,    4,
            3,    2,    4,    4,    3,    3,    1,    3,    1,    1,
            3,    2,    2,    3,    1,    1,    2,    3,    1,    1,
            2,    3,    1,    1,    3,    2,    0,    1,    5,    7,
            5,    6,   10,    3,    5,    1,    1,    3,    0,    2,
            4,    5,    4,    4,    4,    3,    1,    1,    1,    1,
            1,    1,    0,    1,    1,    2,    1,    1,    1,    1,
            1,    1,    1,    1,    1,    1,    2,    1,    3,    1,
            1,    3,    0,    2,    0,    3,    5,    8,    1,    3,
            3,    0,    2,    2,    2,    3,    1,    0,    1,    1,
            3,    3,    3,    4,    4,    1,    1,    2,    2,    3,
            3,    3,    3,    3,    3,    3,    3,    3,    3,    3,
            3,    3,    2,    2,    2,    2,    3,    3,    3,    3,
            3,    3,    3,    3,    3,    3,    3,    3,    3,    3,
            3,    3,    3,    3,    2,    2,    2,    2,    3,    3,
            3,    3,    3,    3,    3,    3,    3,    3,    3,    3,
            5,    4,    3,    4,    4,    2,    2,    4,    2,    2,
            2,    2,    2,    2,    2,    2,    2,    2,    2,    2,
            1,    3,    2,    1,    2,    4,    2,    2,    8,    9,
            8,    9,    9,   10,    9,   10,    8,    3,    2,    2,
            1,    1,    0,    4,    2,    1,    3,    2,    1,    2,
            2,    2,    4,    1,    1,    1,    1,    1,    1,    1,
            1,    3,    1,    1,    1,    0,    1,    1,    0,    1,
            1,    1,    1,    1,    1,    1,    1,    1,    1,    1,
            3,    5,    3,    3,    4,    1,    1,    3,    1,    1,
            1,    1,    1,    3,    2,    3,    0,    1,    1,    3,
            1,    1,    1,    1,    1,    1,    3,    1,    1,    1,
            4,    1,    4,    4,    0,    1,    1,    1,    3,    3,
            1,    4,    2,    2,    1,    3,    1,    4,    3,    3,
            3,    3,    1,    3,    1,    1,    3,    1,    1,    4,
            1,    1,    1,    3,    1,    1,    2,    1,    3,    4,
            3,    2,    0,    2,    2,    1,    2,    1,    1,    1,
            4,    3,    3,    3,    3,    6,    3,    1,    1,    2,
            1
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
    );

    protected function initReduceCallbacks(): void {
        $this->reduceCallbacks = [
            0 => null,
            1 => static function ($self, $stackPos) {
                 $self->semValue = $self->handleNamespaces($self->semStack[$stackPos-(1-1)]);
            },
            2 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; } $self->semValue = $self->semStack[$stackPos-(2-1)];;
            },
            3 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            4 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            5 => null,
            6 => null,
            7 => null,
            8 => null,
            9 => null,
            10 => null,
            11 => null,
            12 => null,
            13 => null,
            14 => null,
            15 => null,
            16 => null,
            17 => null,
            18 => null,
            19 => null,
            20 => null,
            21 => null,
            22 => null,
            23 => null,
            24 => null,
            25 => null,
            26 => null,
            27 => null,
            28 => null,
            29 => null,
            30 => null,
            31 => null,
            32 => null,
            33 => null,
            34 => null,
            35 => null,
            36 => null,
            37 => null,
            38 => null,
            39 => null,
            40 => null,
            41 => null,
            42 => null,
            43 => null,
            44 => null,
            45 => null,
            46 => null,
            47 => null,
            48 => null,
            49 => null,
            50 => null,
            51 => null,
            52 => null,
            53 => null,
            54 => null,
            55 => null,
            56 => null,
            57 => null,
            58 => null,
            59 => null,
            60 => null,
            61 => null,
            62 => null,
            63 => null,
            64 => null,
            65 => null,
            66 => null,
            67 => null,
            68 => null,
            69 => null,
            70 => null,
            71 => null,
            72 => null,
            73 => null,
            74 => null,
            75 => null,
            76 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; if ($self->semValue === "<?=") $self->emitError(new Error('Cannot use "<?=" as an identifier', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])));
            },
            77 => null,
            78 => null,
            79 => null,
            80 => null,
            81 => null,
            82 => null,
            83 => null,
            84 => null,
            85 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            86 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            87 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            88 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            89 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            90 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            91 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            92 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            93 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            94 => null,
            95 => static function ($self, $stackPos) {
                 $self->semValue = new Name(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            96 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            97 => static function ($self, $stackPos) {
                 /* nothing */
            },
            98 => static function ($self, $stackPos) {
                 /* nothing */
            },
            99 => static function ($self, $stackPos) {
                 /* nothing */
            },
            100 => static function ($self, $stackPos) {
                 $self->emitError(new Error('A trailing comma is not allowed here', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])));
            },
            101 => null,
            102 => null,
            103 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Attribute($self->semStack[$stackPos-(1-1)], [], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            104 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Attribute($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            105 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            106 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            107 => static function ($self, $stackPos) {
                 $self->semValue = new Node\AttributeGroup($self->semStack[$stackPos-(4-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            108 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            109 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            110 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            111 => null,
            112 => null,
            113 => null,
            114 => null,
            115 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\HaltCompiler($self->handleHaltCompiler(), $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            116 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Namespace_($self->semStack[$stackPos-(3-2)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            $self->semValue->setAttribute('kind', Stmt\Namespace_::KIND_SEMICOLON);
            $self->checkNamespace($self->semValue);
            },
            117 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Namespace_($self->semStack[$stackPos-(5-2)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            $self->semValue->setAttribute('kind', Stmt\Namespace_::KIND_BRACED);
            $self->checkNamespace($self->semValue);
            },
            118 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Namespace_(null, $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            $self->semValue->setAttribute('kind', Stmt\Namespace_::KIND_BRACED);
            $self->checkNamespace($self->semValue);
            },
            119 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Use_($self->semStack[$stackPos-(3-2)], Stmt\Use_::TYPE_NORMAL, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            120 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Use_($self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            121 => null,
            122 => static function ($self, $stackPos) {
<<<<<<< HEAD
                 $self->semValue = new Stmt\Const_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            123 => static function ($self, $stackPos) {
                 $self->semValue = Stmt\Use_::TYPE_FUNCTION;
            },
            124 => static function ($self, $stackPos) {
                 $self->semValue = Stmt\Use_::TYPE_CONSTANT;
            },
            125 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\GroupUse($self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-6)], $self->semStack[$stackPos-(7-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            126 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\GroupUse($self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-5)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            127 => null,
            128 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            129 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            130 => null,
            131 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            132 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            133 => null,
            134 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            135 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            136 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(1-1)], null, Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(1-1));
            },
            137 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(3-3));
            },
            138 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(1-1)], null, Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(1-1));
            },
            139 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(3-3));
            },
            140 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $self->semValue->type = Stmt\Use_::TYPE_NORMAL;
            },
            141 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)]; $self->semValue->type = $self->semStack[$stackPos-(2-1)];
            },
            142 => null,
            143 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            144 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            145 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            146 => null,
            147 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            148 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            149 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_(new Node\Identifier($self->semStack[$stackPos-(3-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)],  $self->tokenEndStack[$stackPos-(3-1)])), $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
=======
                 $self->semValue = new Stmt\Const_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]), []);
            },
            123 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Const_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(4-1)]);
            $self->checkConstantAttributes($self->semValue);
            },
            124 => static function ($self, $stackPos) {
                 $self->semValue = Stmt\Use_::TYPE_FUNCTION;
            },
            125 => static function ($self, $stackPos) {
                 $self->semValue = Stmt\Use_::TYPE_CONSTANT;
            },
            126 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\GroupUse($self->semStack[$stackPos-(8-3)], $self->semStack[$stackPos-(8-6)], $self->semStack[$stackPos-(8-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            127 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\GroupUse($self->semStack[$stackPos-(7-2)], $self->semStack[$stackPos-(7-5)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            128 => null,
            129 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            130 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            131 => null,
            132 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            133 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            134 => null,
            135 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            136 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            137 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(1-1)], null, Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(1-1));
            },
            138 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(3-3));
            },
            139 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(1-1)], null, Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(1-1));
            },
            140 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UseItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], Stmt\Use_::TYPE_UNKNOWN, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->checkUseUse($self->semValue, $stackPos-(3-3));
            },
            141 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $self->semValue->type = Stmt\Use_::TYPE_NORMAL;
            },
            142 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)]; $self->semValue->type = $self->semStack[$stackPos-(2-1)];
            },
            143 => null,
            144 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            145 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            146 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            147 => null,
            148 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            149 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            },
            150 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Const_(new Node\Identifier($self->semStack[$stackPos-(3-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)],  $self->tokenEndStack[$stackPos-(3-1)])), $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            151 => static function ($self, $stackPos) {
<<<<<<< HEAD
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; } $self->semValue = $self->semStack[$stackPos-(2-1)];;
            },
            152 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            153 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            154 => null,
            155 => null,
            156 => null,
            157 => static function ($self, $stackPos) {
                 throw new Error('__HALT_COMPILER() can only be used from the outermost scope', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            158 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Block($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            159 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\If_($self->semStack[$stackPos-(7-3)], ['stmts' => $self->semStack[$stackPos-(7-5)], 'elseifs' => $self->semStack[$stackPos-(7-6)], 'else' => $self->semStack[$stackPos-(7-7)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            160 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\If_($self->semStack[$stackPos-(10-3)], ['stmts' => $self->semStack[$stackPos-(10-6)], 'elseifs' => $self->semStack[$stackPos-(10-7)], 'else' => $self->semStack[$stackPos-(10-8)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            },
            161 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\While_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            162 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Do_($self->semStack[$stackPos-(7-5)], $self->semStack[$stackPos-(7-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            163 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\For_(['init' => $self->semStack[$stackPos-(9-3)], 'cond' => $self->semStack[$stackPos-(9-5)], 'loop' => $self->semStack[$stackPos-(9-7)], 'stmts' => $self->semStack[$stackPos-(9-9)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            164 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Switch_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            165 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Break_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            166 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Continue_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            167 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Return_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            168 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Global_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            169 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Static_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            170 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Echo_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            171 => static function ($self, $stackPos) {
=======
                 $self->semValue = new Node\Const_(new Node\Identifier($self->semStack[$stackPos-(3-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)],  $self->tokenEndStack[$stackPos-(3-1)])), $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            152 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; } $self->semValue = $self->semStack[$stackPos-(2-1)];;
            },
            153 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            154 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            155 => null,
            156 => null,
            157 => null,
            158 => static function ($self, $stackPos) {
                 throw new Error('__HALT_COMPILER() can only be used from the outermost scope', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            159 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Block($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            160 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\If_($self->semStack[$stackPos-(7-3)], ['stmts' => $self->semStack[$stackPos-(7-5)], 'elseifs' => $self->semStack[$stackPos-(7-6)], 'else' => $self->semStack[$stackPos-(7-7)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            161 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\If_($self->semStack[$stackPos-(10-3)], ['stmts' => $self->semStack[$stackPos-(10-6)], 'elseifs' => $self->semStack[$stackPos-(10-7)], 'else' => $self->semStack[$stackPos-(10-8)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            },
            162 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\While_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            163 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Do_($self->semStack[$stackPos-(7-5)], $self->semStack[$stackPos-(7-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            164 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\For_(['init' => $self->semStack[$stackPos-(9-3)], 'cond' => $self->semStack[$stackPos-(9-5)], 'loop' => $self->semStack[$stackPos-(9-7)], 'stmts' => $self->semStack[$stackPos-(9-9)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            165 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Switch_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            166 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Break_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            167 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Continue_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            168 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Return_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            169 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Global_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            170 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Static_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            171 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Echo_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            172 => static function ($self, $stackPos) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96

        $self->semValue = new Stmt\InlineHTML($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
        $self->semValue->setAttribute('hasLeadingNewline', $self->inlineHtmlHasLeadingNewline($stackPos-(1-1)));

            },
<<<<<<< HEAD
            172 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Expression($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            173 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Unset_($self->semStack[$stackPos-(5-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            174 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-5)][0], ['keyVar' => null, 'byRef' => $self->semStack[$stackPos-(7-5)][1], 'stmts' => $self->semStack[$stackPos-(7-7)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            175 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(9-3)], $self->semStack[$stackPos-(9-7)][0], ['keyVar' => $self->semStack[$stackPos-(9-5)], 'byRef' => $self->semStack[$stackPos-(9-7)][1], 'stmts' => $self->semStack[$stackPos-(9-9)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            176 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(6-3)], new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(6-4)],  $self->tokenEndStack[$stackPos-(6-4)])), ['stmts' => $self->semStack[$stackPos-(6-6)]], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            177 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Declare_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            178 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TryCatch($self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-5)], $self->semStack[$stackPos-(6-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])); $self->checkTryCatch($self->semValue);
            },
            179 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Goto_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            180 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Label($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            181 => static function ($self, $stackPos) {
                 $self->semValue = null; /* means: no statement */
            },
            182 => null,
            183 => static function ($self, $stackPos) {
                 $self->semValue = $self->maybeCreateNop($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]);
            },
            184 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(1-1)] instanceof Stmt\Block) { $self->semValue = $self->semStack[$stackPos-(1-1)]->stmts; } else if ($self->semStack[$stackPos-(1-1)] === null) { $self->semValue = []; } else { $self->semValue = [$self->semStack[$stackPos-(1-1)]]; };
            },
            185 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            186 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            187 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            188 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            189 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Catch_($self->semStack[$stackPos-(8-3)], $self->semStack[$stackPos-(8-4)], $self->semStack[$stackPos-(8-7)], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            190 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            191 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Finally_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            192 => null,
            193 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            194 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            195 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            196 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            197 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            198 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            199 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            200 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            201 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            202 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            203 => null,
            204 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            205 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Function_($self->semStack[$stackPos-(8-3)], ['byRef' => $self->semStack[$stackPos-(8-2)], 'params' => $self->semStack[$stackPos-(8-5)], 'returnType' => $self->semStack[$stackPos-(8-7)], 'stmts' => $self->semStack[$stackPos-(8-8)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            206 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Function_($self->semStack[$stackPos-(9-4)], ['byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-6)], 'returnType' => $self->semStack[$stackPos-(9-8)], 'stmts' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => $self->semStack[$stackPos-(9-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            207 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Class_($self->semStack[$stackPos-(7-2)], ['type' => $self->semStack[$stackPos-(7-1)], 'extends' => $self->semStack[$stackPos-(7-3)], 'implements' => $self->semStack[$stackPos-(7-4)], 'stmts' => $self->semStack[$stackPos-(7-6)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClass($self->semValue, $stackPos-(7-2));
            },
            208 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Class_($self->semStack[$stackPos-(8-3)], ['type' => $self->semStack[$stackPos-(8-2)], 'extends' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClass($self->semValue, $stackPos-(8-3));
            },
            209 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Interface_($self->semStack[$stackPos-(7-3)], ['extends' => $self->semStack[$stackPos-(7-4)], 'stmts' => $self->semStack[$stackPos-(7-6)], 'attrGroups' => $self->semStack[$stackPos-(7-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            $self->checkInterface($self->semValue, $stackPos-(7-3));
            },
            210 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Trait_($self->semStack[$stackPos-(6-3)], ['stmts' => $self->semStack[$stackPos-(6-5)], 'attrGroups' => $self->semStack[$stackPos-(6-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            211 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Enum_($self->semStack[$stackPos-(8-3)], ['scalarType' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            $self->checkEnum($self->semValue, $stackPos-(8-3));
            },
            212 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            213 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            214 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            215 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            216 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            217 => null,
            218 => null,
            219 => static function ($self, $stackPos) {
                 $self->checkClassModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            220 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::ABSTRACT;
            },
            221 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::FINAL;
            },
            222 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            223 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            224 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            225 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            226 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            227 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            228 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            229 => null,
            230 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            231 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            232 => null,
            233 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            234 => null,
            235 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            236 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(1-1)] instanceof Stmt\Block) { $self->semValue = $self->semStack[$stackPos-(1-1)]->stmts; } else if ($self->semStack[$stackPos-(1-1)] === null) { $self->semValue = []; } else { $self->semValue = [$self->semStack[$stackPos-(1-1)]]; };
            },
            237 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            238 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            239 => null,
            240 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            241 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            242 => static function ($self, $stackPos) {
                 $self->semValue = new Node\DeclareItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            243 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            244 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-3)];
            },
            245 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            246 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(5-3)];
            },
            247 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            248 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            249 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Case_($self->semStack[$stackPos-(4-2)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            250 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Case_(null, $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            251 => null,
            252 => null,
            253 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Match_($self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            254 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            255 => null,
            256 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            257 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            258 => static function ($self, $stackPos) {
                 $self->semValue = new Node\MatchArm($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            259 => static function ($self, $stackPos) {
                 $self->semValue = new Node\MatchArm(null, $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            260 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            261 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            262 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            263 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            264 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ElseIf_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
=======
            173 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Expression($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            174 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Unset_($self->semStack[$stackPos-(5-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            175 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-5)][0], ['keyVar' => null, 'byRef' => $self->semStack[$stackPos-(7-5)][1], 'stmts' => $self->semStack[$stackPos-(7-7)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            176 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(9-3)], $self->semStack[$stackPos-(9-7)][0], ['keyVar' => $self->semStack[$stackPos-(9-5)], 'byRef' => $self->semStack[$stackPos-(9-7)][1], 'stmts' => $self->semStack[$stackPos-(9-9)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            177 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Foreach_($self->semStack[$stackPos-(6-3)], new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(6-4)],  $self->tokenEndStack[$stackPos-(6-4)])), ['stmts' => $self->semStack[$stackPos-(6-6)]], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            178 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Declare_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            179 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TryCatch($self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-5)], $self->semStack[$stackPos-(6-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])); $self->checkTryCatch($self->semValue);
            },
            180 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Goto_($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            181 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Label($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            182 => static function ($self, $stackPos) {
                 $self->semValue = null; /* means: no statement */
            },
            183 => null,
            184 => static function ($self, $stackPos) {
                 $self->semValue = $self->maybeCreateNop($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]);
            },
            185 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(1-1)] instanceof Stmt\Block) { $self->semValue = $self->semStack[$stackPos-(1-1)]->stmts; } else if ($self->semStack[$stackPos-(1-1)] === null) { $self->semValue = []; } else { $self->semValue = [$self->semStack[$stackPos-(1-1)]]; };
            },
            186 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            187 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            188 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            189 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            190 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Catch_($self->semStack[$stackPos-(8-3)], $self->semStack[$stackPos-(8-4)], $self->semStack[$stackPos-(8-7)], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            191 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            192 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Finally_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            193 => null,
            194 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            195 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            196 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            197 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            198 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            199 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            200 => static function ($self, $stackPos) {
                 $self->semValue = false;
            },
            201 => static function ($self, $stackPos) {
                 $self->semValue = true;
            },
            202 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            203 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            204 => null,
            205 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            206 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            207 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            208 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Function_($self->semStack[$stackPos-(8-3)], ['byRef' => $self->semStack[$stackPos-(8-2)], 'params' => $self->semStack[$stackPos-(8-5)], 'returnType' => $self->semStack[$stackPos-(8-7)], 'stmts' => $self->semStack[$stackPos-(8-8)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            209 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Function_($self->semStack[$stackPos-(9-4)], ['byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-6)], 'returnType' => $self->semStack[$stackPos-(9-8)], 'stmts' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => $self->semStack[$stackPos-(9-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            210 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Class_($self->semStack[$stackPos-(7-2)], ['type' => $self->semStack[$stackPos-(7-1)], 'extends' => $self->semStack[$stackPos-(7-3)], 'implements' => $self->semStack[$stackPos-(7-4)], 'stmts' => $self->semStack[$stackPos-(7-6)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClass($self->semValue, $stackPos-(7-2));
            },
            211 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Class_($self->semStack[$stackPos-(8-3)], ['type' => $self->semStack[$stackPos-(8-2)], 'extends' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClass($self->semValue, $stackPos-(8-3));
            },
            212 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Interface_($self->semStack[$stackPos-(7-3)], ['extends' => $self->semStack[$stackPos-(7-4)], 'stmts' => $self->semStack[$stackPos-(7-6)], 'attrGroups' => $self->semStack[$stackPos-(7-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            $self->checkInterface($self->semValue, $stackPos-(7-3));
            },
            213 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Trait_($self->semStack[$stackPos-(6-3)], ['stmts' => $self->semStack[$stackPos-(6-5)], 'attrGroups' => $self->semStack[$stackPos-(6-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            214 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Enum_($self->semStack[$stackPos-(8-3)], ['scalarType' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            $self->checkEnum($self->semValue, $stackPos-(8-3));
            },
            215 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            216 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            217 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            218 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            219 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            220 => null,
            221 => null,
            222 => static function ($self, $stackPos) {
                 $self->checkClassModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            223 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::ABSTRACT;
            },
            224 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::FINAL;
            },
            225 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            226 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            227 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            228 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            229 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            230 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            231 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            232 => null,
            233 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            234 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            235 => null,
            236 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            237 => null,
            238 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            239 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(1-1)] instanceof Stmt\Block) { $self->semValue = $self->semStack[$stackPos-(1-1)]->stmts; } else if ($self->semStack[$stackPos-(1-1)] === null) { $self->semValue = []; } else { $self->semValue = [$self->semStack[$stackPos-(1-1)]]; };
            },
            240 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            241 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            242 => null,
            243 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            244 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            245 => static function ($self, $stackPos) {
                 $self->semValue = new Node\DeclareItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            246 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            247 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-3)];
            },
            248 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            249 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(5-3)];
            },
            250 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            251 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            252 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Case_($self->semStack[$stackPos-(4-2)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            253 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Case_(null, $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            254 => null,
            255 => null,
            256 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Match_($self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]));
            },
            257 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            258 => null,
            259 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            260 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            261 => static function ($self, $stackPos) {
                 $self->semValue = new Node\MatchArm($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            262 => static function ($self, $stackPos) {
                 $self->semValue = new Node\MatchArm(null, $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            263 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            264 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            },
            265 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            266 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            267 => static function ($self, $stackPos) {
<<<<<<< HEAD
                 $self->semValue = new Stmt\ElseIf_($self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])); $self->fixupAlternativeElse($self->semValue);
            },
            268 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            269 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Else_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            270 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            271 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Else_($self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->fixupAlternativeElse($self->semValue);
            },
            272 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)], false);
            },
            273 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(2-2)], true);
            },
            274 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)], false);
            },
            275 => static function ($self, $stackPos) {
                 $self->semValue = array($self->fixupArrayDestructuring($self->semStack[$stackPos-(1-1)]), false);
            },
            276 => null,
            277 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            278 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            279 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            280 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            281 => static function ($self, $stackPos) {
                 $self->checkModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            282 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC;
            },
            283 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED;
            },
            284 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE;
            },
            285 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            286 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param($self->semStack[$stackPos-(6-6)], null, $self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-4)], $self->semStack[$stackPos-(6-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-1)]);
            $self->checkParam($self->semValue);
            },
            287 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param($self->semStack[$stackPos-(8-6)], $self->semStack[$stackPos-(8-8)], $self->semStack[$stackPos-(8-3)], $self->semStack[$stackPos-(8-4)], $self->semStack[$stackPos-(8-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(8-2)], $self->semStack[$stackPos-(8-1)]);
            $self->checkParam($self->semValue);
            },
            288 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param(new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])), null, $self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-4)], $self->semStack[$stackPos-(6-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-1)]);
            },
            289 => null,
            290 => static function ($self, $stackPos) {
                 $self->semValue = new Node\NullableType($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            291 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UnionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            292 => null,
            293 => null,
            294 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Name('static', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            295 => static function ($self, $stackPos) {
                 $self->semValue = $self->handleBuiltinTypes($self->semStack[$stackPos-(1-1)]);
            },
            296 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier('array', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            297 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier('callable', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            298 => null,
            299 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            300 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            301 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            302 => null,
            303 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            304 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            305 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            306 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            307 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            308 => static function ($self, $stackPos) {
                 $self->semValue = new Node\IntersectionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            309 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            310 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            311 => static function ($self, $stackPos) {
                 $self->semValue = new Node\IntersectionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            312 => null,
            313 => static function ($self, $stackPos) {
                 $self->semValue = new Node\NullableType($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            314 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UnionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            315 => null,
            316 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            317 => null,
            318 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            319 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            320 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            321 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            322 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            323 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-2)]);
            },
            324 => static function ($self, $stackPos) {
                 $self->semValue = new Node\VariadicPlaceholder($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            325 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            326 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            327 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(1-1)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            328 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(2-2)], true, false, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            329 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(2-2)], false, true, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            330 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(3-3)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(3-1)]);
            },
            331 => null,
            332 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            333 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            334 => null,
            335 => null,
            336 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            337 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            338 => static function ($self, $stackPos) {
                 $self->semValue = new Node\StaticVar($self->semStack[$stackPos-(1-1)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            339 => static function ($self, $stackPos) {
                 $self->semValue = new Node\StaticVar($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            340 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)]; } else { $self->semValue = $self->semStack[$stackPos-(2-1)]; }
            },
            341 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            342 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            343 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Property($self->semStack[$stackPos-(5-2)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-1)]);
            $self->checkProperty($self->semValue, $stackPos-(5-2));
            },
            344 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ClassConst($self->semStack[$stackPos-(5-4)], $self->semStack[$stackPos-(5-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(5-1)]);
            $self->checkClassConst($self->semValue, $stackPos-(5-2));
            },
            345 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ClassConst($self->semStack[$stackPos-(6-5)], $self->semStack[$stackPos-(6-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(6-1)], $self->semStack[$stackPos-(6-4)]);
            $self->checkClassConst($self->semValue, $stackPos-(6-2));
            },
            346 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ClassMethod($self->semStack[$stackPos-(10-5)], ['type' => $self->semStack[$stackPos-(10-2)], 'byRef' => $self->semStack[$stackPos-(10-4)], 'params' => $self->semStack[$stackPos-(10-7)], 'returnType' => $self->semStack[$stackPos-(10-9)], 'stmts' => $self->semStack[$stackPos-(10-10)], 'attrGroups' => $self->semStack[$stackPos-(10-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClassMethod($self->semValue, $stackPos-(10-2));
            },
            347 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUse($self->semStack[$stackPos-(3-2)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            348 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\EnumCase($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-4)], $self->semStack[$stackPos-(5-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            349 => static function ($self, $stackPos) {
                 $self->semValue = null; /* will be skipped */
            },
            350 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            351 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            352 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            353 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            354 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Precedence($self->semStack[$stackPos-(4-1)][0], $self->semStack[$stackPos-(4-1)][1], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            355 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Alias($self->semStack[$stackPos-(5-1)][0], $self->semStack[$stackPos-(5-1)][1], $self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            356 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Alias($self->semStack[$stackPos-(4-1)][0], $self->semStack[$stackPos-(4-1)][1], $self->semStack[$stackPos-(4-3)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            357 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Alias($self->semStack[$stackPos-(4-1)][0], $self->semStack[$stackPos-(4-1)][1], null, $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            358 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Alias($self->semStack[$stackPos-(4-1)][0], $self->semStack[$stackPos-(4-1)][1], null, $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            359 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            360 => null,
            361 => static function ($self, $stackPos) {
                 $self->semValue = array(null, $self->semStack[$stackPos-(1-1)]);
            },
            362 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            363 => null,
            364 => null,
            365 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            366 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            367 => null,
            368 => null,
            369 => static function ($self, $stackPos) {
                 $self->checkModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            370 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC;
            },
            371 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED;
            },
            372 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE;
            },
            373 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::STATIC;
            },
            374 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::ABSTRACT;
            },
            375 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::FINAL;
            },
            376 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            377 => null,
            378 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            379 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            380 => static function ($self, $stackPos) {
                 $self->semValue = new Node\VarLikeIdentifier(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            381 => static function ($self, $stackPos) {
                 $self->semValue = new Node\PropertyItem($self->semStack[$stackPos-(1-1)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            382 => static function ($self, $stackPos) {
                 $self->semValue = new Node\PropertyItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
=======
                 $self->semValue = new Stmt\ElseIf_($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            268 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            269 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            270 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ElseIf_($self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-6)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])); $self->fixupAlternativeElse($self->semValue);
            },
            271 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            272 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Else_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            273 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            274 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Else_($self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->fixupAlternativeElse($self->semValue);
            },
            275 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)], false);
            },
            276 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(2-2)], true);
            },
            277 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)], false);
            },
            278 => static function ($self, $stackPos) {
                 $self->semValue = array($self->fixupArrayDestructuring($self->semStack[$stackPos-(1-1)]), false);
            },
            279 => null,
            280 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            281 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            282 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            283 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            284 => static function ($self, $stackPos) {
                 $self->checkModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            285 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC;
            },
            286 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED;
            },
            287 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE;
            },
            288 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC_SET;
            },
            289 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED_SET;
            },
            290 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE_SET;
            },
            291 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            292 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::FINAL;
            },
            293 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param($self->semStack[$stackPos-(7-6)], null, $self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-4)], $self->semStack[$stackPos-(7-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(7-2)], $self->semStack[$stackPos-(7-1)], $self->semStack[$stackPos-(7-7)]);
            $self->checkParam($self->semValue);
            $self->addPropertyNameToHooks($self->semValue);
            },
            294 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param($self->semStack[$stackPos-(9-6)], $self->semStack[$stackPos-(9-8)], $self->semStack[$stackPos-(9-3)], $self->semStack[$stackPos-(9-4)], $self->semStack[$stackPos-(9-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(9-2)], $self->semStack[$stackPos-(9-1)], $self->semStack[$stackPos-(9-9)]);
            $self->checkParam($self->semValue);
            $self->addPropertyNameToHooks($self->semValue);
            },
            295 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Param(new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos])), null, $self->semStack[$stackPos-(6-3)], $self->semStack[$stackPos-(6-4)], $self->semStack[$stackPos-(6-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-1)]);
            },
            296 => null,
            297 => static function ($self, $stackPos) {
                 $self->semValue = new Node\NullableType($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            298 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UnionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            299 => null,
            300 => null,
            301 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Name('static', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            302 => static function ($self, $stackPos) {
                 $self->semValue = $self->handleBuiltinTypes($self->semStack[$stackPos-(1-1)]);
            },
            303 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier('array', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            304 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Identifier('callable', $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            305 => null,
            306 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            307 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            308 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            309 => null,
            310 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            311 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            312 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            313 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            314 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            315 => static function ($self, $stackPos) {
                 $self->semValue = new Node\IntersectionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            316 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            317 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            318 => static function ($self, $stackPos) {
                 $self->semValue = new Node\IntersectionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            319 => null,
            320 => static function ($self, $stackPos) {
                 $self->semValue = new Node\NullableType($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            321 => static function ($self, $stackPos) {
                 $self->semValue = new Node\UnionType($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            322 => null,
            323 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            324 => null,
            325 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            326 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(2-2)];
            },
            327 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            328 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            329 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            330 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-2)]);
            },
            331 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            332 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-2)];
            },
            333 => static function ($self, $stackPos) {
                 $self->semValue = array(new Node\Arg($self->semStack[$stackPos-(4-2)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos])));
            },
            334 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-2)]);
            },
            335 => static function ($self, $stackPos) {
                 $self->semValue = array(new Node\Arg($self->semStack[$stackPos-(3-1)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)],  $self->tokenEndStack[$stackPos-(3-1)])), $self->semStack[$stackPos-(3-3)]);
            },
            336 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            337 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            338 => static function ($self, $stackPos) {
                 $self->semValue = new Node\VariadicPlaceholder($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            339 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            340 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            341 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(2-2)], true, false, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            342 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(2-2)], false, true, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            343 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(3-3)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(3-1)]);
            },
            344 => static function ($self, $stackPos) {
                 $self->semValue = new Node\Arg($self->semStack[$stackPos-(1-1)], false, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            345 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            346 => null,
            347 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            348 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            349 => null,
            350 => null,
            351 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            352 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            353 => static function ($self, $stackPos) {
                 $self->semValue = new Node\StaticVar($self->semStack[$stackPos-(1-1)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            354 => static function ($self, $stackPos) {
                 $self->semValue = new Node\StaticVar($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            355 => static function ($self, $stackPos) {
                 if ($self->semStack[$stackPos-(2-2)] !== null) { $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)]; } else { $self->semValue = $self->semStack[$stackPos-(2-1)]; }
            },
            356 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            357 => static function ($self, $stackPos) {
                 $nop = $self->maybeCreateZeroLengthNop($self->tokenPos);;
            if ($nop !== null) { $self->semStack[$stackPos-(1-1)][] = $nop; } $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            358 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Property($self->semStack[$stackPos-(5-2)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-1)]);
            },
            359 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\Property($self->semStack[$stackPos-(7-2)], $self->semStack[$stackPos-(7-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(7-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(7-3)], $self->semStack[$stackPos-(7-1)], $self->semStack[$stackPos-(7-6)]);
            $self->checkPropertyHooksForMultiProperty($self->semValue, $stackPos-(7-5));
            $self->checkEmptyPropertyHookList($self->semStack[$stackPos-(7-6)], $stackPos-(7-5));
            $self->addPropertyNameToHooks($self->semValue);
            },
            360 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ClassConst($self->semStack[$stackPos-(5-4)], $self->semStack[$stackPos-(5-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(5-1)]);
            $self->checkClassConst($self->semValue, $stackPos-(5-2));
            },
            361 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ClassConst($self->semStack[$stackPos-(6-5)], $self->semStack[$stackPos-(6-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]), $self->semStack[$stackPos-(6-1)], $self->semStack[$stackPos-(6-4)]);
            $self->checkClassConst($self->semValue, $stackPos-(6-2));
            },
            362 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\ClassMethod($self->semStack[$stackPos-(10-5)], ['type' => $self->semStack[$stackPos-(10-2)], 'byRef' => $self->semStack[$stackPos-(10-4)], 'params' => $self->semStack[$stackPos-(10-7)], 'returnType' => $self->semStack[$stackPos-(10-9)], 'stmts' => $self->semStack[$stackPos-(10-10)], 'attrGroups' => $self->semStack[$stackPos-(10-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            $self->checkClassMethod($self->semValue, $stackPos-(10-2));
            },
            363 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUse($self->semStack[$stackPos-(3-2)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            364 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\EnumCase($self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-4)], $self->semStack[$stackPos-(5-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            365 => static function ($self, $stackPos) {
                 $self->semValue = null; /* will be skipped */
            },
            366 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            367 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            368 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            369 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            370 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Precedence($self->semStack[$stackPos-(4-1)][0], $self->semStack[$stackPos-(4-1)][1], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            371 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Alias($self->semStack[$stackPos-(5-1)][0], $self->semStack[$stackPos-(5-1)][1], $self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            372 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Alias($self->semStack[$stackPos-(4-1)][0], $self->semStack[$stackPos-(4-1)][1], $self->semStack[$stackPos-(4-3)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            373 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Alias($self->semStack[$stackPos-(4-1)][0], $self->semStack[$stackPos-(4-1)][1], null, $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            374 => static function ($self, $stackPos) {
                 $self->semValue = new Stmt\TraitUseAdaptation\Alias($self->semStack[$stackPos-(4-1)][0], $self->semStack[$stackPos-(4-1)][1], null, $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            375 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)]);
            },
            376 => null,
            377 => static function ($self, $stackPos) {
                 $self->semValue = array(null, $self->semStack[$stackPos-(1-1)]);
            },
            378 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            379 => null,
            380 => null,
            381 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            382 => static function ($self, $stackPos) {
                 $self->semValue = 0;
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
            },
            383 => null,
            384 => null,
            385 => static function ($self, $stackPos) {
<<<<<<< HEAD
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            386 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            387 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            388 => null,
            389 => null,
            390 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Assign($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            391 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Assign($self->fixupArrayDestructuring($self->semStack[$stackPos-(3-1)]), $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            392 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Assign($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            393 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignRef($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            394 => static function ($self, $stackPos) {
=======
                 $self->checkModifier($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            386 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC;
            },
            387 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED;
            },
            388 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE;
            },
            389 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PUBLIC_SET;
            },
            390 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PROTECTED_SET;
            },
            391 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::PRIVATE_SET;
            },
            392 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::STATIC;
            },
            393 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::ABSTRACT;
            },
            394 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::FINAL;
            },
            395 => static function ($self, $stackPos) {
                 $self->semValue = Modifiers::READONLY;
            },
            396 => null,
            397 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            398 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            399 => static function ($self, $stackPos) {
                 $self->semValue = new Node\VarLikeIdentifier(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            400 => static function ($self, $stackPos) {
                 $self->semValue = new Node\PropertyItem($self->semStack[$stackPos-(1-1)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            401 => static function ($self, $stackPos) {
                 $self->semValue = new Node\PropertyItem($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            402 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            403 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            404 => static function ($self, $stackPos) {
                 $self->semValue = [];
            },
            405 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)]; $self->checkEmptyPropertyHookList($self->semStack[$stackPos-(3-2)], $stackPos-(3-1));
            },
            406 => static function ($self, $stackPos) {
                 $self->semValue = new Node\PropertyHook($self->semStack[$stackPos-(5-4)], $self->semStack[$stackPos-(5-5)], ['flags' => $self->semStack[$stackPos-(5-2)], 'byRef' => $self->semStack[$stackPos-(5-3)], 'params' => [], 'attrGroups' => $self->semStack[$stackPos-(5-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            $self->checkPropertyHook($self->semValue, null);
            },
            407 => static function ($self, $stackPos) {
                 $self->semValue = new Node\PropertyHook($self->semStack[$stackPos-(8-4)], $self->semStack[$stackPos-(8-8)], ['flags' => $self->semStack[$stackPos-(8-2)], 'byRef' => $self->semStack[$stackPos-(8-3)], 'params' => $self->semStack[$stackPos-(8-6)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            $self->checkPropertyHook($self->semValue, $stackPos-(8-5));
            },
            408 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            409 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            410 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            411 => static function ($self, $stackPos) {
                 $self->semValue = 0;
            },
            412 => static function ($self, $stackPos) {
                 $self->checkPropertyHookModifiers($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $stackPos-(2-2)); $self->semValue = $self->semStack[$stackPos-(2-1)] | $self->semStack[$stackPos-(2-2)];
            },
            413 => null,
            414 => null,
            415 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            416 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            417 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            418 => null,
            419 => null,
            420 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Assign($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            421 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Assign($self->fixupArrayDestructuring($self->semStack[$stackPos-(3-1)]), $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            422 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Assign($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            423 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignRef($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            424 => static function ($self, $stackPos) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                 $self->semValue = new Expr\AssignRef($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            if (!$self->phpVersion->allowsAssignNewByReference()) {
                $self->emitError(new Error('Cannot assign new by reference', $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos])));
            }

            },
<<<<<<< HEAD
            395 => null,
            396 => null,
            397 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Clone_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            398 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Plus($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            399 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Minus($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            400 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Mul($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            401 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Div($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            402 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Concat($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            403 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Mod($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            404 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\BitwiseAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            405 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\BitwiseOr($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            406 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\BitwiseXor($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            407 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\ShiftLeft($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            408 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\ShiftRight($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            409 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Pow($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            410 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Coalesce($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            411 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PostInc($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            412 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PreInc($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            413 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PostDec($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            414 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PreDec($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            415 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BooleanOr($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            416 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BooleanAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            417 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\LogicalOr($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            418 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\LogicalAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            419 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\LogicalXor($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            420 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BitwiseOr($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            421 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BitwiseAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            422 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BitwiseAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            423 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BitwiseXor($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            424 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Concat($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            425 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Plus($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            426 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Minus($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            427 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Mul($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            428 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Div($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            429 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Mod($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            430 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\ShiftLeft($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            431 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\ShiftRight($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            432 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Pow($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            433 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\UnaryPlus($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            434 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\UnaryMinus($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            435 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BooleanNot($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            436 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BitwiseNot($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            437 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Identical($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            438 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\NotIdentical($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            439 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Equal($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            440 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\NotEqual($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            441 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Spaceship($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            442 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Smaller($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            443 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\SmallerOrEqual($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            444 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Greater($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            445 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\GreaterOrEqual($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            446 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Instanceof_($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            447 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            448 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Ternary($self->semStack[$stackPos-(5-1)], $self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            449 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Ternary($self->semStack[$stackPos-(4-1)], null, $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            450 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Coalesce($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            451 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Isset_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            452 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Empty_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            453 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Include_($self->semStack[$stackPos-(2-2)], Expr\Include_::TYPE_INCLUDE, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            454 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Include_($self->semStack[$stackPos-(2-2)], Expr\Include_::TYPE_INCLUDE_ONCE, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            455 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Eval_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            456 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Include_($self->semStack[$stackPos-(2-2)], Expr\Include_::TYPE_REQUIRE, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            457 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Include_($self->semStack[$stackPos-(2-2)], Expr\Include_::TYPE_REQUIRE_ONCE, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            458 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\Int_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            459 => static function ($self, $stackPos) {
=======
            425 => null,
            426 => null,
            427 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\FuncCall(new Node\Name($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)],  $self->tokenEndStack[$stackPos-(2-1)])), $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            428 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Clone_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            429 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Plus($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            430 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Minus($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            431 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Mul($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            432 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Div($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            433 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Concat($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            434 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Mod($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            435 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\BitwiseAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            436 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\BitwiseOr($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            437 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\BitwiseXor($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            438 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\ShiftLeft($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            439 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\ShiftRight($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            440 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Pow($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            441 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\AssignOp\Coalesce($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            442 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PostInc($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            443 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PreInc($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            444 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PostDec($self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            445 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PreDec($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            446 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BooleanOr($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            447 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BooleanAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            448 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\LogicalOr($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            449 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\LogicalAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            450 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\LogicalXor($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            451 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BitwiseOr($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            452 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BitwiseAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            453 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BitwiseAnd($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            454 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\BitwiseXor($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            455 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Concat($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            456 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Plus($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            457 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Minus($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            458 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Mul($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            459 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Div($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            460 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Mod($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            461 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\ShiftLeft($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            462 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\ShiftRight($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            463 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Pow($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            464 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\UnaryPlus($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            465 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\UnaryMinus($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            466 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BooleanNot($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            467 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BitwiseNot($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            468 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Identical($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            469 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\NotIdentical($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            470 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Equal($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            471 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\NotEqual($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            472 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Spaceship($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            473 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Smaller($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            474 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\SmallerOrEqual($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            475 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Greater($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            476 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\GreaterOrEqual($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            477 => static function ($self, $stackPos) {

          $self->semValue = new Expr\BinaryOp\Pipe($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
          $self->checkPipeOperatorParentheses($self->semStack[$stackPos-(3-3)]);

            },
            478 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Instanceof_($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            479 => static function ($self, $stackPos) {

          $self->semValue = $self->semStack[$stackPos-(3-2)];
          if ($self->semValue instanceof Expr\ArrowFunction) {
              $self->parenthesizedArrowFunctions->offsetSet($self->semValue);
          }

            },
            480 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Ternary($self->semStack[$stackPos-(5-1)], $self->semStack[$stackPos-(5-3)], $self->semStack[$stackPos-(5-5)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            481 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Ternary($self->semStack[$stackPos-(4-1)], null, $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            482 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\BinaryOp\Coalesce($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            483 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Isset_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            484 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Empty_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            485 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Include_($self->semStack[$stackPos-(2-2)], Expr\Include_::TYPE_INCLUDE, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            486 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Include_($self->semStack[$stackPos-(2-2)], Expr\Include_::TYPE_INCLUDE_ONCE, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            487 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Eval_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            488 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Include_($self->semStack[$stackPos-(2-2)], Expr\Include_::TYPE_REQUIRE, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            489 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Include_($self->semStack[$stackPos-(2-2)], Expr\Include_::TYPE_REQUIRE_ONCE, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            490 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]);
            $attrs['kind'] = $self->getIntCastKind($self->semStack[$stackPos-(2-1)]);
            $self->semValue = new Expr\Cast\Int_($self->semStack[$stackPos-(2-2)], $attrs);
            },
            491 => static function ($self, $stackPos) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]);
            $attrs['kind'] = $self->getFloatCastKind($self->semStack[$stackPos-(2-1)]);
            $self->semValue = new Expr\Cast\Double($self->semStack[$stackPos-(2-2)], $attrs);
            },
<<<<<<< HEAD
            460 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\String_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            461 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\Array_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            462 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\Object_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            463 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\Bool_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            464 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\Unset_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            465 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]);
            $attrs['kind'] = strtolower($self->semStack[$stackPos-(2-1)]) === 'exit' ? Expr\Exit_::KIND_EXIT : Expr\Exit_::KIND_DIE;
            $self->semValue = new Expr\Exit_($self->semStack[$stackPos-(2-2)], $attrs);
            },
            466 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ErrorSuppress($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            467 => null,
            468 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ShellExec($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            469 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Print_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            470 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Yield_(null, null, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            471 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Yield_($self->semStack[$stackPos-(2-2)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            472 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Yield_($self->semStack[$stackPos-(4-4)], $self->semStack[$stackPos-(4-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            473 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\YieldFrom($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            474 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Throw_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            475 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrowFunction(['static' => false, 'byRef' => $self->semStack[$stackPos-(8-2)], 'params' => $self->semStack[$stackPos-(8-4)], 'returnType' => $self->semStack[$stackPos-(8-6)], 'expr' => $self->semStack[$stackPos-(8-8)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            476 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrowFunction(['static' => true, 'byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-5)], 'returnType' => $self->semStack[$stackPos-(9-7)], 'expr' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            477 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Closure(['static' => false, 'byRef' => $self->semStack[$stackPos-(8-2)], 'params' => $self->semStack[$stackPos-(8-4)], 'uses' => $self->semStack[$stackPos-(8-6)], 'returnType' => $self->semStack[$stackPos-(8-7)], 'stmts' => $self->semStack[$stackPos-(8-8)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            478 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Closure(['static' => true, 'byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-5)], 'uses' => $self->semStack[$stackPos-(9-7)], 'returnType' => $self->semStack[$stackPos-(9-8)], 'stmts' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            479 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrowFunction(['static' => false, 'byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-5)], 'returnType' => $self->semStack[$stackPos-(9-7)], 'expr' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => $self->semStack[$stackPos-(9-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            480 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrowFunction(['static' => true, 'byRef' => $self->semStack[$stackPos-(10-4)], 'params' => $self->semStack[$stackPos-(10-6)], 'returnType' => $self->semStack[$stackPos-(10-8)], 'expr' => $self->semStack[$stackPos-(10-10)], 'attrGroups' => $self->semStack[$stackPos-(10-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            },
            481 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Closure(['static' => false, 'byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-5)], 'uses' => $self->semStack[$stackPos-(9-7)], 'returnType' => $self->semStack[$stackPos-(9-8)], 'stmts' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => $self->semStack[$stackPos-(9-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            482 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Closure(['static' => true, 'byRef' => $self->semStack[$stackPos-(10-4)], 'params' => $self->semStack[$stackPos-(10-6)], 'uses' => $self->semStack[$stackPos-(10-8)], 'returnType' => $self->semStack[$stackPos-(10-9)], 'stmts' => $self->semStack[$stackPos-(10-10)], 'attrGroups' => $self->semStack[$stackPos-(10-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            },
            483 => static function ($self, $stackPos) {
                 $self->semValue = array(new Stmt\Class_(null, ['type' => $self->semStack[$stackPos-(8-2)], 'extends' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos])), $self->semStack[$stackPos-(8-3)]);
            $self->checkClass($self->semValue[0], -1);
            },
            484 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\New_($self->semStack[$stackPos-(3-2)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            485 => static function ($self, $stackPos) {
                 list($class, $ctorArgs) = $self->semStack[$stackPos-(2-2)]; $self->semValue = new Expr\New_($class, $ctorArgs, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            486 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            487 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-3)];
            },
            488 => null,
            489 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            490 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            491 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ClosureUse($self->semStack[$stackPos-(2-2)], $self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            492 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            493 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\FuncCall($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            494 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\FuncCall($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            495 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\FuncCall($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            496 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticCall($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            497 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            498 => null,
            499 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            500 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            501 => static function ($self, $stackPos) {
                 $self->semValue = new Name\FullyQualified(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            502 => static function ($self, $stackPos) {
                 $self->semValue = new Name\Relative(substr($self->semStack[$stackPos-(1-1)], 10), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            503 => null,
            504 => null,
            505 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            506 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            507 => null,
            508 => null,
            509 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            510 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            511 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            512 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]); foreach ($self->semValue as $s) { if ($s instanceof Node\InterpolatedStringPart) { $s->value = Node\Scalar\String_::parseEscapeSequences($s->value, '`', $self->phpVersion->supportsUnicodeEscapes()); } };
            },
            513 => static function ($self, $stackPos) {
                 foreach ($self->semStack[$stackPos-(1-1)] as $s) { if ($s instanceof Node\InterpolatedStringPart) { $s->value = Node\Scalar\String_::parseEscapeSequences($s->value, '`', $self->phpVersion->supportsUnicodeEscapes()); } }; $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            514 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            515 => null,
            516 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ConstFetch($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            517 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Line($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            518 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\File($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            519 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Dir($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            520 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Class_($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            521 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Trait_($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            522 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Method($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            523 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Function_($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            524 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Namespace_($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            525 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ClassConstFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            526 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ClassConstFetch($self->semStack[$stackPos-(5-1)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            527 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ClassConstFetch($self->semStack[$stackPos-(3-1)], new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(3-3)],  $self->tokenEndStack[$stackPos-(3-3)])), $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            528 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]); $attrs['kind'] = Expr\Array_::KIND_SHORT;
            $self->semValue = new Expr\Array_($self->semStack[$stackPos-(3-2)], $attrs);
            },
            529 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]); $attrs['kind'] = Expr\Array_::KIND_LONG;
            $self->semValue = new Expr\Array_($self->semStack[$stackPos-(4-3)], $attrs);
            $self->createdArrays->attach($self->semValue);
            },
            530 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $self->createdArrays->attach($self->semValue);
            },
            531 => static function ($self, $stackPos) {
                 $self->semValue = Scalar\String_::fromString($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]), $self->phpVersion->supportsUnicodeEscapes());
            },
            532 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]); $attrs['kind'] = Scalar\String_::KIND_DOUBLE_QUOTED;
            foreach ($self->semStack[$stackPos-(3-2)] as $s) { if ($s instanceof Node\InterpolatedStringPart) { $s->value = Node\Scalar\String_::parseEscapeSequences($s->value, '"', $self->phpVersion->supportsUnicodeEscapes()); } }; $self->semValue = new Scalar\InterpolatedString($self->semStack[$stackPos-(3-2)], $attrs);
            },
            533 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseLNumber($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]), $self->phpVersion->allowsInvalidOctals());
            },
            534 => static function ($self, $stackPos) {
                 $self->semValue = Scalar\Float_::fromString($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            535 => null,
            536 => null,
            537 => null,
            538 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseDocString($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-2)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]), $self->getAttributes($self->tokenStartStack[$stackPos-(3-3)],  $self->tokenEndStack[$stackPos-(3-3)]), true);
            },
            539 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseDocString($self->semStack[$stackPos-(2-1)], '', $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]), $self->getAttributes($self->tokenStartStack[$stackPos-(2-2)],  $self->tokenEndStack[$stackPos-(2-2)]), true);
            },
            540 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseDocString($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-2)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]), $self->getAttributes($self->tokenStartStack[$stackPos-(3-3)],  $self->tokenEndStack[$stackPos-(3-3)]), true);
            },
            541 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            542 => null,
            543 => null,
            544 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            545 => null,
            546 => null,
            547 => null,
            548 => null,
            549 => null,
            550 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            551 => null,
            552 => null,
            553 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            554 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            555 => null,
            556 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\MethodCall($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            557 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafeMethodCall($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            558 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            559 => null,
            560 => null,
            561 => null,
            562 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            563 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            564 => null,
            565 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            566 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            567 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable(new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos])), $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            568 => static function ($self, $stackPos) {
                 $var = $self->semStack[$stackPos-(1-1)]->name; $self->semValue = \is_string($var) ? new Node\VarLikeIdentifier($var, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])) : $var;
            },
            569 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            570 => null,
            571 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            572 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            573 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            574 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            575 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            576 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            577 => null,
            578 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            579 => null,
            580 => null,
            581 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            582 => null,
            583 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            584 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\List_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos])); $self->semValue->setAttribute('kind', Expr\List_::KIND_LIST);
            $self->postprocessList($self->semValue);
            },
            585 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $end = count($self->semValue)-1; if ($self->semValue[$end]->value instanceof Expr\Error) array_pop($self->semValue);
            },
            586 => null,
            587 => static function ($self, $stackPos) {
                 /* do nothing -- prevent default action of $$=$self->semStack[$1]. See $551. */
            },
            588 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            589 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            590 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            591 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, true, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            592 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            593 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            594 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(4-4)], $self->semStack[$stackPos-(4-1)], true, $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            595 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            596 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]), true);
            },
            597 => static function ($self, $stackPos) {
=======
            492 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]);
            $attrs['kind'] = $self->getStringCastKind($self->semStack[$stackPos-(2-1)]);
            $self->semValue = new Expr\Cast\String_($self->semStack[$stackPos-(2-2)], $attrs);
            },
            493 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\Array_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            494 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\Object_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            495 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]);
            $attrs['kind'] = $self->getBoolCastKind($self->semStack[$stackPos-(2-1)]);
            $self->semValue = new Expr\Cast\Bool_($self->semStack[$stackPos-(2-2)], $attrs);
            },
            496 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\Unset_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            497 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Cast\Void_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            498 => static function ($self, $stackPos) {
                 $self->semValue = $self->createExitExpr($self->semStack[$stackPos-(2-1)], $stackPos-(2-1), $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            499 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ErrorSuppress($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            500 => null,
            501 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ShellExec($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            502 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Print_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            503 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Yield_(null, null, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            504 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Yield_($self->semStack[$stackPos-(2-2)], null, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            505 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Yield_($self->semStack[$stackPos-(4-4)], $self->semStack[$stackPos-(4-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            506 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\YieldFrom($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            507 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Throw_($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            508 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrowFunction(['static' => false, 'byRef' => $self->semStack[$stackPos-(8-2)], 'params' => $self->semStack[$stackPos-(8-4)], 'returnType' => $self->semStack[$stackPos-(8-6)], 'expr' => $self->semStack[$stackPos-(8-8)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            509 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrowFunction(['static' => true, 'byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-5)], 'returnType' => $self->semStack[$stackPos-(9-7)], 'expr' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            510 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Closure(['static' => false, 'byRef' => $self->semStack[$stackPos-(8-2)], 'params' => $self->semStack[$stackPos-(8-4)], 'uses' => $self->semStack[$stackPos-(8-6)], 'returnType' => $self->semStack[$stackPos-(8-7)], 'stmts' => $self->semStack[$stackPos-(8-8)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos]));
            },
            511 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Closure(['static' => true, 'byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-5)], 'uses' => $self->semStack[$stackPos-(9-7)], 'returnType' => $self->semStack[$stackPos-(9-8)], 'stmts' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => []], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            512 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrowFunction(['static' => false, 'byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-5)], 'returnType' => $self->semStack[$stackPos-(9-7)], 'expr' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => $self->semStack[$stackPos-(9-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            513 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrowFunction(['static' => true, 'byRef' => $self->semStack[$stackPos-(10-4)], 'params' => $self->semStack[$stackPos-(10-6)], 'returnType' => $self->semStack[$stackPos-(10-8)], 'expr' => $self->semStack[$stackPos-(10-10)], 'attrGroups' => $self->semStack[$stackPos-(10-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            },
            514 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Closure(['static' => false, 'byRef' => $self->semStack[$stackPos-(9-3)], 'params' => $self->semStack[$stackPos-(9-5)], 'uses' => $self->semStack[$stackPos-(9-7)], 'returnType' => $self->semStack[$stackPos-(9-8)], 'stmts' => $self->semStack[$stackPos-(9-9)], 'attrGroups' => $self->semStack[$stackPos-(9-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(9-1)], $self->tokenEndStack[$stackPos]));
            },
            515 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Closure(['static' => true, 'byRef' => $self->semStack[$stackPos-(10-4)], 'params' => $self->semStack[$stackPos-(10-6)], 'uses' => $self->semStack[$stackPos-(10-8)], 'returnType' => $self->semStack[$stackPos-(10-9)], 'stmts' => $self->semStack[$stackPos-(10-10)], 'attrGroups' => $self->semStack[$stackPos-(10-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(10-1)], $self->tokenEndStack[$stackPos]));
            },
            516 => static function ($self, $stackPos) {
                 $self->semValue = array(new Stmt\Class_(null, ['type' => $self->semStack[$stackPos-(8-2)], 'extends' => $self->semStack[$stackPos-(8-4)], 'implements' => $self->semStack[$stackPos-(8-5)], 'stmts' => $self->semStack[$stackPos-(8-7)], 'attrGroups' => $self->semStack[$stackPos-(8-1)]], $self->getAttributes($self->tokenStartStack[$stackPos-(8-1)], $self->tokenEndStack[$stackPos])), $self->semStack[$stackPos-(8-3)]);
            $self->checkClass($self->semValue[0], -1);
            },
            517 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\New_($self->semStack[$stackPos-(3-2)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            518 => static function ($self, $stackPos) {
                 list($class, $ctorArgs) = $self->semStack[$stackPos-(2-2)]; $self->semValue = new Expr\New_($class, $ctorArgs, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            519 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\New_($self->semStack[$stackPos-(2-2)], [], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            520 => null,
            521 => null,
            522 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            523 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(4-3)];
            },
            524 => null,
            525 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            526 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            527 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ClosureUse($self->semStack[$stackPos-(2-2)], $self->semStack[$stackPos-(2-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            528 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            529 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\FuncCall($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            530 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\FuncCall($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            531 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\FuncCall($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            532 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticCall($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            533 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            534 => null,
            535 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            536 => static function ($self, $stackPos) {
                 $self->semValue = new Name($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            537 => static function ($self, $stackPos) {
                 $self->semValue = new Name\FullyQualified(substr($self->semStack[$stackPos-(1-1)], 1), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            538 => static function ($self, $stackPos) {
                 $self->semValue = new Name\Relative(substr($self->semStack[$stackPos-(1-1)], 10), $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            539 => null,
            540 => null,
            541 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            542 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            543 => null,
            544 => null,
            545 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            546 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]); foreach ($self->semValue as $s) { if ($s instanceof Node\InterpolatedStringPart) { $s->value = Node\Scalar\String_::parseEscapeSequences($s->value, '`', $self->phpVersion->supportsUnicodeEscapes()); } };
            },
            547 => static function ($self, $stackPos) {
                 foreach ($self->semStack[$stackPos-(1-1)] as $s) { if ($s instanceof Node\InterpolatedStringPart) { $s->value = Node\Scalar\String_::parseEscapeSequences($s->value, '`', $self->phpVersion->supportsUnicodeEscapes()); } }; $self->semValue = $self->semStack[$stackPos-(1-1)];
            },
            548 => static function ($self, $stackPos) {
                 $self->semValue = array();
            },
            549 => null,
            550 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ConstFetch($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            551 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Line($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            552 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\File($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            553 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Dir($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            554 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Class_($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            555 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Trait_($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            556 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Method($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            557 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Function_($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            558 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Namespace_($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            559 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\MagicConst\Property($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            560 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ClassConstFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            561 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ClassConstFetch($self->semStack[$stackPos-(5-1)], $self->semStack[$stackPos-(5-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(5-1)], $self->tokenEndStack[$stackPos]));
            },
            562 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ClassConstFetch($self->semStack[$stackPos-(3-1)], new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(3-3)],  $self->tokenEndStack[$stackPos-(3-3)])), $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            563 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]); $attrs['kind'] = Expr\Array_::KIND_SHORT;
            $self->semValue = new Expr\Array_($self->semStack[$stackPos-(3-2)], $attrs);
            },
            564 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]); $attrs['kind'] = Expr\Array_::KIND_LONG;
            $self->semValue = new Expr\Array_($self->semStack[$stackPos-(4-3)], $attrs);
            $self->createdArrays->offsetSet($self->semValue);
            },
            565 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $self->createdArrays->offsetSet($self->semValue);
            },
            566 => static function ($self, $stackPos) {
                 $self->semValue = Scalar\String_::fromString($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]), $self->phpVersion->supportsUnicodeEscapes());
            },
            567 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]); $attrs['kind'] = Scalar\String_::KIND_DOUBLE_QUOTED;
            foreach ($self->semStack[$stackPos-(3-2)] as $s) { if ($s instanceof Node\InterpolatedStringPart) { $s->value = Node\Scalar\String_::parseEscapeSequences($s->value, '"', $self->phpVersion->supportsUnicodeEscapes()); } }; $self->semValue = new Scalar\InterpolatedString($self->semStack[$stackPos-(3-2)], $attrs);
            },
            568 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseLNumber($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]), $self->phpVersion->allowsInvalidOctals());
            },
            569 => static function ($self, $stackPos) {
                 $self->semValue = Scalar\Float_::fromString($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            570 => null,
            571 => null,
            572 => null,
            573 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseDocString($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-2)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]), $self->getAttributes($self->tokenStartStack[$stackPos-(3-3)],  $self->tokenEndStack[$stackPos-(3-3)]), true);
            },
            574 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseDocString($self->semStack[$stackPos-(2-1)], '', $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]), $self->getAttributes($self->tokenStartStack[$stackPos-(2-2)],  $self->tokenEndStack[$stackPos-(2-2)]), true);
            },
            575 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseDocString($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-2)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]), $self->getAttributes($self->tokenStartStack[$stackPos-(3-3)],  $self->tokenEndStack[$stackPos-(3-3)]), true);
            },
            576 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            577 => null,
            578 => null,
            579 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            580 => null,
            581 => null,
            582 => null,
            583 => null,
            584 => null,
            585 => null,
            586 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            587 => null,
            588 => null,
            589 => null,
            590 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            591 => null,
            592 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\MethodCall($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            593 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafeMethodCall($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->semStack[$stackPos-(4-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            594 => static function ($self, $stackPos) {
                 $self->semValue = null;
            },
            595 => null,
            596 => null,
            597 => null,
            598 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            599 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            600 => null,
            601 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            602 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            603 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable(new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos])), $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            604 => static function ($self, $stackPos) {
                 $var = $self->semStack[$stackPos-(1-1)]->name; $self->semValue = \is_string($var) ? new Node\VarLikeIdentifier($var, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])) : $var;
            },
            605 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            606 => null,
            607 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            608 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            609 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            610 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            611 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\StaticPropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            612 => null,
            613 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            614 => null,
            615 => null,
            616 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            617 => null,
            618 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Error($self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos])); $self->errorState = 2;
            },
            619 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\List_($self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos])); $self->semValue->setAttribute('kind', Expr\List_::KIND_LIST);
            $self->postprocessList($self->semValue);
            },
            620 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(1-1)]; $end = count($self->semValue)-1; if ($self->semValue[$end]->value instanceof Expr\Error) array_pop($self->semValue);
            },
            621 => null,
            622 => static function ($self, $stackPos) {
                 /* do nothing -- prevent default action of $$=$self->semStack[$1]. See $551. */
            },
            623 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(3-1)][] = $self->semStack[$stackPos-(3-3)]; $self->semValue = $self->semStack[$stackPos-(3-1)];
            },
            624 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            625 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            626 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, true, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            627 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(1-1)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            628 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            629 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(4-4)], $self->semStack[$stackPos-(4-1)], true, $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            630 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(3-3)], $self->semStack[$stackPos-(3-1)], false, $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            631 => static function ($self, $stackPos) {
                 $self->semValue = new Node\ArrayItem($self->semStack[$stackPos-(2-2)], null, false, $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]), true);
            },
            632 => static function ($self, $stackPos) {
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
                 /* Create an Error node now to remember the position. We'll later either report an error,
             or convert this into a null element, depending on whether this is a creation or destructuring context. */
          $attrs = $self->createEmptyElemAttributes($self->tokenPos);
          $self->semValue = new Node\ArrayItem(new Expr\Error($attrs), null, false, $attrs);
            },
<<<<<<< HEAD
            598 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            599 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            600 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            601 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)]);
            },
            602 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]); $attrs['rawValue'] = $self->semStack[$stackPos-(1-1)]; $self->semValue = new Node\InterpolatedStringPart($self->semStack[$stackPos-(1-1)], $attrs);
            },
            603 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            604 => null,
            605 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            606 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            607 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            608 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            609 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            610 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            611 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            612 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\String_($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            613 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            614 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString('-' . $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            615 => null,
=======
            633 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            634 => static function ($self, $stackPos) {
                 $self->semStack[$stackPos-(2-1)][] = $self->semStack[$stackPos-(2-2)]; $self->semValue = $self->semStack[$stackPos-(2-1)];
            },
            635 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(1-1)]);
            },
            636 => static function ($self, $stackPos) {
                 $self->semValue = array($self->semStack[$stackPos-(2-1)], $self->semStack[$stackPos-(2-2)]);
            },
            637 => static function ($self, $stackPos) {
                 $attrs = $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]); $attrs['rawValue'] = $self->semStack[$stackPos-(1-1)]; $self->semValue = new Node\InterpolatedStringPart($self->semStack[$stackPos-(1-1)], $attrs);
            },
            638 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            639 => null,
            640 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(4-1)], $self->semStack[$stackPos-(4-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(4-1)], $self->tokenEndStack[$stackPos]));
            },
            641 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\PropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            642 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\NullsafePropertyFetch($self->semStack[$stackPos-(3-1)], $self->semStack[$stackPos-(3-3)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            643 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            644 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\Variable($self->semStack[$stackPos-(3-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(3-1)], $self->tokenEndStack[$stackPos]));
            },
            645 => static function ($self, $stackPos) {
                 $self->semValue = new Expr\ArrayDimFetch($self->semStack[$stackPos-(6-2)], $self->semStack[$stackPos-(6-4)], $self->getAttributes($self->tokenStartStack[$stackPos-(6-1)], $self->tokenEndStack[$stackPos]));
            },
            646 => static function ($self, $stackPos) {
                 $self->semValue = $self->semStack[$stackPos-(3-2)];
            },
            647 => static function ($self, $stackPos) {
                 $self->semValue = new Scalar\String_($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            648 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString($self->semStack[$stackPos-(1-1)], $self->getAttributes($self->tokenStartStack[$stackPos-(1-1)], $self->tokenEndStack[$stackPos]));
            },
            649 => static function ($self, $stackPos) {
                 $self->semValue = $self->parseNumString('-' . $self->semStack[$stackPos-(2-2)], $self->getAttributes($self->tokenStartStack[$stackPos-(2-1)], $self->tokenEndStack[$stackPos]));
            },
            650 => null,
>>>>>>> 2e72f1632cadb8c405e63c6aa2090259be9a8e96
        ];
    }
}
