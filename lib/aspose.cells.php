<?php 
namespace aspose\cells;
use Java;

final class AccessCacheOptions {
	const ALL = -1;
	const CALCULATE_FORMULA = 8388617;
	const CELL_DISPLAY = 1048710;
	const CELLS_DATA = 9;
	const CONDITIONAL_FORMATTING = 16777225;
	const GET_FORMULA = 2097152;
	const NONE = 0;
	const POSITION_AND_SIZE = 3;
	const SET_FORMULA = 4194304;
	const VALIDATION = 33554441;
};

final class AdjustFontSizeForRowType {
	const EMPTY_ROWS = 1;
	const NONE = 0;
};

final class AutoFillType {
	const COPY = 1;
	const DEFAULT = 0;
	const FORMATS = 3;
	const SERIES = 2;
	const VALUES = 4;
};

final class AutoFitMergedCellsType {
	const EACH_LINE = 3;
	const FIRST_LINE = 1;
	const LAST_LINE = 2;
	const NONE = 0;
};

final class AutoFitWrappedTextType {
	const DEFAULT = 0;
	const PARAGRAPH = 1;
};

final class AutoShapeType {
	const ARC = 19;
	const BACK_PREVIOUS_ACTION_BUTTON = 194;
	const BALLOON = 17;
	const BEGINNING_ACTION_BUTTON = 196;
	const BENT_ARROW = 91;
	const BENT_CONNECTOR_2 = 33;
	const BENT_CONNECTOR_4 = 35;
	const BENT_CONNECTOR_5 = 36;
	const BENT_UP_ARROW = 90;
	const BEVEL = 84;
	const BLANK_ACTION_BUTTON = 189;
	const BLOCK_ARC = 95;
	const CAN = 22;
	const CHART_PLUS = 2105;
	const CHART_STAR = 2104;
	const CHART_X = 2103;
	const CHEVRON = 55;
	const CHORD = 2069;
	const CIRCULAR_ARROW = 99;
	const CLOUD = 2070;
	const CLOUD_CALLOUT = 106;
	const CORNER_TABS = 2100;
	const CROSS = 11;
	const CUBE = 16;
	const CURVED_CONNECTOR = 38;
	const CURVED_CONNECTOR_2 = 37;
	const CURVED_CONNECTOR_4 = 39;
	const CURVED_CONNECTOR_5 = 40;
	const CURVED_DOWN_ARROW = 105;
	const CURVED_DOWN_RIBBON = 107;
	const CURVED_LEFT_ARROW = 103;
	const CURVED_RIGHT_ARROW = 102;
	const CURVED_UP_ARROW = 104;
	const CURVED_UP_RIBBON = 108;
	const DECAGON = 2050;
	const DIAGONAL_STRIPE = 2068;
	const DIAMOND = 4;
	const DOCUMENT_ACTION_BUTTON = 198;
	const DODECAGON = 2051;
	const DONUT = 23;
	const DOUBLE_BRACE = 186;
	const DOUBLE_BRACKET = 185;
	const DOUBLE_WAVE = 188;
	const DOWN_ARROW = 67;
	const DOWN_ARROW_CALLOUT = 80;
	const DOWN_RIBBON = 53;
	const ELBOW_CONNECTOR = 34;
	const END_ACTION_BUTTON = 195;
	const EXPLOSION_1 = 71;
	const EXPLOSION_2 = 72;
	const FLOW_CHART_ALTERNATE_PROCESS = 176;
	const FLOW_CHART_CARD = 121;
	const FLOW_CHART_COLLATE = 125;
	const FLOW_CHART_CONNECTOR = 120;
	const FLOW_CHART_DATA = 111;
	const FLOW_CHART_DECISION = 110;
	const FLOW_CHART_DELAY = 135;
	const FLOW_CHART_DIRECT_ACCESS_STORAGE = 133;
	const FLOW_CHART_DISPLAY = 134;
	const FLOW_CHART_DOCUMENT = 114;
	const FLOW_CHART_EXTRACT = 127;
	const FLOW_CHART_INTERNAL_STORAGE = 113;
	const FLOW_CHART_MAGNETIC_DISK = 132;
	const FLOW_CHART_MANUAL_INPUT = 118;
	const FLOW_CHART_MANUAL_OPERATION = 119;
	const FLOW_CHART_MERGE = 128;
	const FLOW_CHART_MULTIDOCUMENT = 115;
	const FLOW_CHART_OFFLINE_STORAGE = 129;
	const FLOW_CHART_OFFPAGE_CONNECTOR = 177;
	const FLOW_CHART_OR = 124;
	const FLOW_CHART_PREDEFINED_PROCESS = 112;
	const FLOW_CHART_PREPARATION = 117;
	const FLOW_CHART_PROCESS = 109;
	const FLOW_CHART_PUNCHED_TAPE = 122;
	const FLOW_CHART_SEQUENTIAL_ACCESS_STORAGE = 131;
	const FLOW_CHART_SORT = 126;
	const FLOW_CHART_STORED_DATA = 130;
	const FLOW_CHART_SUMMING_JUNCTION = 123;
	const FLOW_CHART_TERMINATOR = 116;
	const FOLDED_CORNER = 65;
	const FORWARD_NEXT_ACTION_BUTTON = 193;
	const FRAME = 2106;
	const FUNNEL = 2099;
	const GEAR_6 = 2097;
	const GEAR_9 = 2098;
	const HALF_FRAME = 2066;
	const HEART = 74;
	const HELP_ACTION_BUTTON = 191;
	const HEPTAGON = 2049;
	const HEXAGON = 9;
	const HOME_ACTION_BUTTON = 190;
	const HOME_PLATE = 15;
	const HORIZONTAL_SCROLL = 98;
	const HOST_CONTROL = 201;
	const INFORMATION_ACTION_BUTTON = 192;
	const ISOSCELES_TRIANGLE = 5;
	const L_SHAPE = 2067;
	const LEFT_ARROW = 66;
	const LEFT_ARROW_CALLOUT = 77;
	const LEFT_BRACE = 87;
	const LEFT_BRACKET = 85;
	const LEFT_CIRCULAR_ARROW = 2080;
	const LEFT_RIGHT_ARROW = 69;
	const LEFT_RIGHT_ARROW_CALLOUT = 81;
	const LEFT_RIGHT_CIRCULAR_ARROW = 2081;
	const LEFT_RIGHT_RIBBON = 2083;
	const LEFT_RIGHT_UP_ARROW = 182;
	const LEFT_UP_ARROW = 89;
	const LIGHTNING_BOLT = 73;
	const LINE = 20;
	const LINE_CALLOUT_NO_BORDER_1 = 178;
	const LINE_CALLOUT_NO_BORDER_2 = 41;
	const LINE_CALLOUT_NO_BORDER_3 = 42;
	const LINE_CALLOUT_NO_BORDER_4 = 43;
	const LINE_CALLOUT_WITH_ACCENT_BAR_1 = 179;
	const LINE_CALLOUT_WITH_ACCENT_BAR_2 = 44;
	const LINE_CALLOUT_WITH_ACCENT_BAR_3 = 45;
	const LINE_CALLOUT_WITH_ACCENT_BAR_4 = 46;
	const LINE_CALLOUT_WITH_BORDER_1 = 180;
	const LINE_CALLOUT_WITH_BORDER_2 = 47;
	const LINE_CALLOUT_WITH_BORDER_3 = 48;
	const LINE_CALLOUT_WITH_BORDER_4 = 49;
	const LINE_CALLOUT_WITH_BORDER_AND_ACCENT_BAR_1 = 181;
	const LINE_CALLOUT_WITH_BORDER_AND_ACCENT_BAR_2 = 50;
	const LINE_CALLOUT_WITH_BORDER_AND_ACCENT_BAR_3 = 51;
	const LINE_CALLOUT_WITH_BORDER_AND_ACCENT_BAR_4 = 52;
	const LINE_INV = 2077;
	const MATH_DIVIDE = 2074;
	const MATH_EQUAL = 2075;
	const MATH_MINUS = 2072;
	const MATH_MULTIPLY = 2073;
	const MATH_NOT_EQUAL = 2076;
	const MATH_PLUS = 2071;
	const MODEL_3_D = 2107;
	const MOON = 184;
	const MOVIE_ACTION_BUTTON = 200;
	const MSOSPT_TEXT_ON_RING = 31;
	const NO_SYMBOL = 57;
	const NON_ISOSCELES_TRAPEZOID = 2078;
	const NOT_PRIMITIVE = 0;
	const NOTCHED_CIRCULAR_ARROW = 100;
	const NOTCHED_RIGHT_ARROW = 94;
	const OCTAGON = 10;
	const OVAL = 3;
	const OVAL_CALLOUT = 63;
	const PARALLELOGRAM = 7;
	const PICTURE_FRAME = 75;
	const PIE = 2064;
	const PIE_WEDGE = 2079;
	const PLAQUE = 21;
	const PLAQUE_TABS = 2102;
	const QUAD_ARROW = 76;
	const QUAD_ARROW_CALLOUT = 83;
	const RECTANGLE = 1;
	const RECTANGULAR_CALLOUT = 61;
	const REGULAR_PENTAGON = 56;
	const RETURN_ACTION_BUTTON = 197;
	const RIGHT_ARROW = 13;
	const RIGHT_ARROW_CALLOUT = 78;
	const RIGHT_BRACE = 88;
	const RIGHT_BRACKET = 86;
	const RIGHT_TRIANGLE = 6;
	const ROUND_CALLOUT = 2108;
	const ROUND_DIAGONAL_CORNER_RECTANGLE = 2058;
	const ROUND_SAME_SIDE_CORNER_RECTANGLE = 2057;
	const ROUND_SINGLE_CORNER_RECTANGLE = 2056;
	const ROUNDED_RECTANGLE = 2;
	const ROUNDED_RECTANGULAR_CALLOUT = 62;
	const SEAL = 18;
	const SMILEY_FACE = 96;
	const SNIP_DIAGONAL_CORNER_RECTANGLE = 2062;
	const SNIP_ROUND_SINGLE_CORNER_RECTANGLE = 2059;
	const SNIP_SAME_SIDE_CORNER_RECTANGLE = 2061;
	const SNIP_SINGLE_CORNER_RECTANGLE = 2060;
	const SOUND_ACTION_BUTTON = 199;
	const SQUARE_TABS = 2101;
	const STAR_10 = 2054;
	const STAR_12 = 2055;
	const STAR_16 = 59;
	const STAR_24 = 92;
	const STAR_32 = 60;
	const STAR_4 = 187;
	const STAR_5 = 12;
	const STAR_6 = 2052;
	const STAR_7 = 2053;
	const STAR_8 = 58;
	const STRAIGHT_CONNECTOR = 32;
	const STRIPED_RIGHT_ARROW = 93;
	const SUN = 183;
	const SWOOSH_ARROW = 2082;
	const TEARDROP = 2063;
	const TEXT_ARCH_DOWN_CURVE = 145;
	const TEXT_ARCH_DOWN_POUR = 149;
	const TEXT_ARCH_LEFT_CURVE = 2111;
	const TEXT_ARCH_LEFT_POUR = 2109;
	const TEXT_ARCH_RIGHT_CURVE = 2112;
	const TEXT_ARCH_RIGHT_POUR = 2110;
	const TEXT_ARCH_UP_CURVE = 144;
	const TEXT_ARCH_UP_POUR = 148;
	const TEXT_BOX = 202;
	const TEXT_BUTTON_CURVE = 147;
	const TEXT_BUTTON_POUR = 151;
	const TEXT_CAN_DOWN = 175;
	const TEXT_CAN_UP = 174;
	const TEXT_CASCADE_DOWN = 155;
	const TEXT_CASCADE_UP = 154;
	const TEXT_CHEVRON = 140;
	const TEXT_CHEVRON_INVERTED = 141;
	const TEXT_CIRCLE_CURVE = 146;
	const TEXT_CIRCLE_POUR = 150;
	const TEXT_CURVE = 27;
	const TEXT_CURVE_DOWN = 153;
	const TEXT_CURVE_UP = 152;
	const TEXT_DEFLATE = 161;
	const TEXT_DEFLATE_BOTTOM = 163;
	const TEXT_DEFLATE_INFLATE = 166;
	const TEXT_DEFLATE_INFLATE_DEFLATE = 167;
	const TEXT_DEFLATE_TOP = 165;
	const TEXT_DOUBLE_WAVE_1 = 158;
	const TEXT_DOUBLE_WAVE_2 = 159;
	const TEXT_FADE_DOWN = 171;
	const TEXT_FADE_LEFT = 169;
	const TEXT_FADE_RIGHT = 168;
	const TEXT_FADE_UP = 170;
	const TEXT_HEXAGON = 26;
	const TEXT_INFLATE = 160;
	const TEXT_INFLATE_BOTTOM = 162;
	const TEXT_INFLATE_TOP = 164;
	const TEXT_NO_SHAPE = 2084;
	const TEXT_OCTAGON = 25;
	const TEXT_ON_CURVE = 30;
	const TEXT_PLAIN_TEXT = 136;
	const TEXT_RING = 29;
	const TEXT_RING_INSIDE = 142;
	const TEXT_RING_OUTSIDE = 143;
	const TEXT_SIMPLE = 24;
	const TEXT_SLANT_DOWN = 173;
	const TEXT_SLANT_UP = 172;
	const TEXT_STOP = 137;
	const TEXT_TRIANGLE = 138;
	const TEXT_TRIANGLE_INVERTED = 139;
	const TEXT_WAVE = 28;
	const TEXT_WAVE_1 = 156;
	const TEXT_WAVE_2 = 157;
	const TRAPEZOID = 8;
	const U_TURN_ARROW = 101;
	const UNKNOWN = 4095;
	const UP_ARROW = 68;
	const UP_ARROW_CALLOUT = 79;
	const UP_DOWN_ARROW = 70;
	const UP_DOWN_ARROW_CALLOUT = 82;
	const UP_RIBBON = 54;
	const VERTICAL_SCROLL = 97;
	const WAVE = 64;
};

final class AxisType {
	const CATEGORY = 0;
	const SERIES = 2;
	const VALUE = 1;
};

final class BackgroundMode {
	const AUTOMATIC = 0;
	const OPAQUE = 1;
	const TRANSPARENT = 2;
};

final class BackgroundType {
	const DIAGONAL_CROSSHATCH = 9;
	const DIAGONAL_STRIPE = 8;
	const GRAY_12 = 17;
	const GRAY_25 = 4;
	const GRAY_50 = 2;
	const GRAY_6 = 18;
	const GRAY_75 = 3;
	const HORIZONTAL_STRIPE = 5;
	const NONE = 0;
	const REVERSE_DIAGONAL_STRIPE = 7;
	const SOLID = 1;
	const THICK_DIAGONAL_CROSSHATCH = 10;
	const THIN_DIAGONAL_CROSSHATCH = 16;
	const THIN_DIAGONAL_STRIPE = 14;
	const THIN_HORIZONTAL_CROSSHATCH = 15;
	const THIN_HORIZONTAL_STRIPE = 11;
	const THIN_REVERSE_DIAGONAL_STRIPE = 13;
	const THIN_VERTICAL_STRIPE = 12;
	const VERTICAL_STRIPE = 6;
};

final class Bar3DShapeType {
	const BOX = 0;
	const CONE_TO_MAX = 5;
	const CONE_TO_POINT = 4;
	const CYLINDER = 3;
	const PYRAMID_TO_MAX = 2;
	const PYRAMID_TO_POINT = 1;
};

final class BevelPresetType {
	const ANGLE = 1;
	const ART_DECO = 2;
	const CIRCLE = 3;
	const CONVEX = 4;
	const COOL_SLANT = 5;
	const CROSS = 6;
	const DIVOT = 7;
	const HARD_EDGE = 8;
	const NONE = 0;
	const RELAXED_INSET = 9;
	const RIBLET = 10;
	const SLOPE = 11;
	const SOFT_ROUND = 12;
};

final class BevelType {
	const ANGLE = 1;
	const ART_DECO = 2;
	const CIRCLE = 3;
	const CONVEX = 4;
	const COOL_SLANT = 5;
	const CROSS = 6;
	const DIVOT = 7;
	const HARD_EDGE = 8;
	const NONE = 0;
	const RELAXED_INSET = 9;
	const RIBLET = 10;
	const SLOPE = 11;
	const SOFT_ROUND = 12;
};

final class BorderType {
	const BOTTOM_BORDER = 8;
	const DIAGONAL = 48;
	const DIAGONAL_DOWN = 16;
	const DIAGONAL_UP = 32;
	const DYNAMIC_STYLE_BORDERS = 192;
	const HORIZONTAL = 128;
	const LEFT_BORDER = 1;
	const NONE = 0;
	const RIGHT_BORDER = 2;
	const SIDE_BORDERS = 15;
	const TOP_BORDER = 4;
	const VERTICAL = 64;
};

final class BubbleSizeRepresents {
	const SIZE_IS_AREA = 0;
	const SIZE_IS_WIDTH = 1;
};

final class BuiltinStyleType {
	const ACCENT_1 = 29;
	const ACCENT_2 = 33;
	const ACCENT_3 = 37;
	const ACCENT_4 = 41;
	const ACCENT_5 = 45;
	const ACCENT_6 = 49;
	const BAD = 27;
	const CALCULATION = 22;
	const CHECK_CELL = 23;
	const COLUMN_LEVEL = 2;
	const COMMA = 3;
	const COMMA_1 = 6;
	const CURRENCY = 4;
	const CURRENCY_1 = 7;
	const EXPLANATORY_TEXT = 53;
	const FOLLOWED_HYPERLINK = 9;
	const FORTY_PERCENT_ACCENT_1 = 31;
	const FORTY_PERCENT_ACCENT_2 = 35;
	const FORTY_PERCENT_ACCENT_3 = 39;
	const FORTY_PERCENT_ACCENT_4 = 43;
	const FORTY_PERCENT_ACCENT_5 = 47;
	const FORTY_PERCENT_ACCENT_6 = 51;
	const GOOD = 26;
	const HEADER_1 = 16;
	const HEADER_2 = 17;
	const HEADER_3 = 18;
	const HEADER_4 = 19;
	const HYPERLINK = 8;
	const INPUT = 20;
	const LINKED_CELL = 24;
	const NEUTRAL = 28;
	const NORMAL = 0;
	const NOTE = 10;
	const OUTPUT = 21;
	const PERCENT = 5;
	const ROW_LEVEL = 1;
	const SIXTY_PERCENT_ACCENT_1 = 32;
	const SIXTY_PERCENT_ACCENT_2 = 36;
	const SIXTY_PERCENT_ACCENT_3 = 40;
	const SIXTY_PERCENT_ACCENT_4 = 44;
	const SIXTY_PERCENT_ACCENT_5 = 48;
	const SIXTY_PERCENT_ACCENT_6 = 52;
	const TITLE = 15;
	const TOTAL = 25;
	const TWENTY_PERCENT_ACCENT_1 = 30;
	const TWENTY_PERCENT_ACCENT_2 = 34;
	const TWENTY_PERCENT_ACCENT_3 = 38;
	const TWENTY_PERCENT_ACCENT_4 = 42;
	const TWENTY_PERCENT_ACCENT_5 = 46;
	const TWENTY_PERCENT_ACCENT_6 = 50;
	const WARNING_TEXT = 11;
};

final class BulletType {
	const AUTO_NUMBERED = 3;
	const CHARACTER = 1;
	const NONE = 0;
	const PICTURE = 2;
};

final class CalcModeType {
	const AUTOMATIC = 0;
	const AUTOMATIC_EXCEPT_TABLE = 1;
	const MANUAL = 2;
};

final class CalculationPrecisionStrategy {
	const DECIMAL = 2;
	const NONE = 0;
	const ROUND = 1;
};

final class CategoryType {
	const AUTOMATIC_SCALE = 0;
	const CATEGORY_SCALE = 1;
	const TIME_SCALE = 2;
};

final class CellBorderType {
	const DASH_DOT = 9;
	const DASH_DOT_DOT = 11;
	const DASHED = 3;
	const DOTTED = 4;
	const DOUBLE = 6;
	const HAIR = 7;
	const MEDIUM = 2;
	const MEDIUM_DASH_DOT = 10;
	const MEDIUM_DASH_DOT_DOT = 12;
	const MEDIUM_DASHED = 8;
	const NONE = 0;
	const SLANTED_DASH_DOT = 13;
	const THICK = 5;
	const THIN = 1;
};

final class CellsUnitType {
	const CHARACTER = 7;
	const CM = 6;
	const INCH = 4;
	const PIXEL = 1;
	const POINT = 2;
};

final class CellValueFormatStrategy {
	const CELL_STYLE = 1;
	const DISPLAY_STRING = 3;
	const DISPLAY_STYLE = 2;
	const NONE = 0;
};

final class CellValueType {
	const IS_BOOL = 16;
	const IS_DATE_TIME = 4;
	const IS_ERROR = 32;
	const IS_NULL = 1;
	const IS_NUMERIC = 2;
	const IS_STRING = 8;
	const IS_UNKNOWN = 0;
};

final class ChartLineFormattingType {
	const AUTOMATIC = 0;
	const GRADIENT = 3;
	const NONE = 2;
	const SOLID = 1;
};

final class ChartMarkerType {
	const AUTOMATIC = 0;
	const CIRCLE = 1;
	const DASH = 2;
	const DIAMOND = 3;
	const DOT = 4;
	const NONE = 5;
	const PICTURE = 11;
	const SQUARE = 7;
	const SQUARE_PLUS = 6;
	const SQUARE_STAR = 8;
	const SQUARE_X = 10;
	const TRIANGLE = 9;
};

final class ChartSplitType {
	const AUTO = 4;
	const CUSTOM = 3;
	const PERCENT_VALUE = 2;
	const POSITION = 0;
	const VALUE = 1;
};

final class ChartTextDirectionType {
	const HORIZONTAL = 0;
	const ROTATE_270 = 3;
	const ROTATE_90 = 2;
	const STACKED = 4;
	const VERTICAL = 1;
};

final class ChartType {
	const AREA = 0;
	const AREA_100_PERCENT_STACKED = 2;
	const AREA_3_D = 3;
	const AREA_3_D_100_PERCENT_STACKED = 5;
	const AREA_3_D_STACKED = 4;
	const AREA_STACKED = 1;
	const BAR = 6;
	const BAR_100_PERCENT_STACKED = 8;
	const BAR_3_D_100_PERCENT_STACKED = 11;
	const BAR_3_D_CLUSTERED = 9;
	const BAR_3_D_STACKED = 10;
	const BAR_STACKED = 7;
	const BOX_WHISKER = 73;
	const BUBBLE = 12;
	const BUBBLE_3_D = 13;
	const COLUMN = 14;
	const COLUMN_100_PERCENT_STACKED = 16;
	const COLUMN_3_D = 17;
	const COLUMN_3_D_100_PERCENT_STACKED = 20;
	const COLUMN_3_D_CLUSTERED = 18;
	const COLUMN_3_D_STACKED = 19;
	const COLUMN_STACKED = 15;
	const CONE = 21;
	const CONE_100_PERCENT_STACKED = 23;
	const CONE_STACKED = 22;
	const CONICAL_BAR = 24;
	const CONICAL_BAR_100_PERCENT_STACKED = 26;
	const CONICAL_BAR_STACKED = 25;
	const CONICAL_COLUMN_3_D = 27;
	const CYLINDER = 28;
	const CYLINDER_100_PERCENT_STACKED = 30;
	const CYLINDER_STACKED = 29;
	const CYLINDRICAL_BAR = 31;
	const CYLINDRICAL_BAR_100_PERCENT_STACKED = 33;
	const CYLINDRICAL_BAR_STACKED = 32;
	const CYLINDRICAL_COLUMN_3_D = 34;
	const DOUGHNUT = 35;
	const DOUGHNUT_EXPLODED = 36;
	const FUNNEL = 74;
	const HISTOGRAM = 79;
	const LINE = 37;
	const LINE_100_PERCENT_STACKED = 39;
	const LINE_100_PERCENT_STACKED_WITH_DATA_MARKERS = 42;
	const LINE_3_D = 43;
	const LINE_STACKED = 38;
	const LINE_STACKED_WITH_DATA_MARKERS = 41;
	const LINE_WITH_DATA_MARKERS = 40;
	const MAP = 80;
	const PARETO_LINE = 75;
	const PIE = 44;
	const PIE_3_D = 45;
	const PIE_3_D_EXPLODED = 48;
	const PIE_BAR = 49;
	const PIE_EXPLODED = 47;
	const PIE_PIE = 46;
	const PYRAMID = 50;
	const PYRAMID_100_PERCENT_STACKED = 52;
	const PYRAMID_BAR = 53;
	const PYRAMID_BAR_100_PERCENT_STACKED = 55;
	const PYRAMID_BAR_STACKED = 54;
	const PYRAMID_COLUMN_3_D = 56;
	const PYRAMID_STACKED = 51;
	const RADAR = 57;
	const RADAR_FILLED = 59;
	const RADAR_WITH_DATA_MARKERS = 58;
	const RADIAL_HISTOGRAM = 81;
	const SCATTER = 60;
	const SCATTER_CONNECTED_BY_CURVES_WITH_DATA_MARKER = 61;
	const SCATTER_CONNECTED_BY_CURVES_WITHOUT_DATA_MARKER = 62;
	const SCATTER_CONNECTED_BY_LINES_WITH_DATA_MARKER = 63;
	const SCATTER_CONNECTED_BY_LINES_WITHOUT_DATA_MARKER = 64;
	const STOCK_HIGH_LOW_CLOSE = 65;
	const STOCK_OPEN_HIGH_LOW_CLOSE = 66;
	const STOCK_VOLUME_HIGH_LOW_CLOSE = 67;
	const STOCK_VOLUME_OPEN_HIGH_LOW_CLOSE = 68;
	const SUNBURST = 76;
	const SURFACE_3_D = 69;
	const SURFACE_CONTOUR = 71;
	const SURFACE_CONTOUR_WIREFRAME = 72;
	const SURFACE_WIREFRAME_3_D = 70;
	const TREEMAP = 77;
	const WATERFALL = 78;
};

final class CheckValueType {
	const CHECKED = 1;
	const MIXED = 2;
	const UN_CHECKED = 0;
};

final class ColorDepth {
	const DEFAULT = 0;
	const FORMAT_1_BPP = 1;
	const FORMAT_24_BPP = 24;
	const FORMAT_32_BPP = 32;
	const FORMAT_4_BPP = 4;
	const FORMAT_8_BPP = 8;
};

final class ColorType {
	const AUTOMATIC = 0;
	const AUTOMATIC_INDEX = 1;
	const INDEXED_COLOR = 3;
	const RGB = 2;
	const THEME = 4;
};

final class CommentTitleType {
	const CELL = 0;
	const COMMENT = 1;
	const NOTE = 2;
	const REPLY = 3;
};

final class ConsolidationFunction {
	const AVERAGE = 2;
	const COUNT = 1;
	const COUNT_NUMS = 6;
	const DISTINCT_COUNT = 11;
	const MAX = 3;
	const MIN = 4;
	const PRODUCT = 5;
	const STD_DEV = 7;
	const STD_DEVP = 8;
	const SUM = 0;
	const VAR = 9;
	const VARP = 10;
};

final class ControlBorderType {
	const NONE = 0;
	const SINGLE = 1;
};

final class ControlCaptionAlignmentType {
	const LEFT = 0;
	const RIGHT = 1;
};

final class ControlListStyle {
	const OPTION = 1;
	const PLAIN = 0;
};

final class ControlMatchEntryType {
	const COMPLETE = 1;
	const FIRST_LETTER = 0;
	const NONE = 2;
};

final class ControlMousePointerType {
	const APP_STARTING = 13;
	const ARROW = 1;
	const CROSS = 2;
	const CUSTOM = 99;
	const DEFAULT = 0;
	const HELP = 14;
	const HOUR_GLASS = 11;
	const I_BEAM = 3;
	const NO_DROP = 12;
	const SIZE_ALL = 15;
	const SIZE_NESW = 6;
	const SIZE_NS = 7;
	const SIZE_NWSE = 8;
	const SIZE_WE = 9;
	const UP_ARROW = 10;
};

final class ControlPictureAlignmentType {
	const BOTTOM_LEFT = 3;
	const BOTTOM_RIGHT = 4;
	const CENTER = 2;
	const TOP_LEFT = 0;
	const TOP_RIGHT = 1;
};

final class ControlPicturePositionType {
	const ABOVE_CENTER = 458753;
	const ABOVE_LEFT = 393216;
	const ABOVE_RIGHT = 524290;
	const BELOW_CENTER = 65543;
	const BELOW_LEFT = 6;
	const BELOW_RIGHT = 131080;
	const CENTER = 262148;
	const LEFT_BOTTOM = 524294;
	const LEFT_CENTER = 327683;
	const LEFT_TOP = 131072;
	const RIGHT_BOTTOM = 393224;
	const RIGHT_CENTER = 196613;
	const RIGHT_TOP = 2;
};

final class ControlPictureSizeMode {
	const CLIP = 0;
	const STRETCH = 1;
	const ZOOM = 3;
};

final class ControlScrollBarType {
	const BARS_BOTH = 3;
	const BARS_VERTICAL = 2;
	const HORIZONTAL = 1;
	const NONE = 0;
};

final class ControlScrollOrientation {
	const AUTO = 3;
	const HORIZONTAL = 1;
	const VERTICAL = 0;
};

final class ControlSpecialEffectType {
	const BUMP = 6;
	const ETCHED = 3;
	const FLAT = 0;
	const RAISED = 1;
	const SUNKEN = 2;
};

final class ControlType {
	const BAR_CODE = 11;
	const CHECK_BOX = 2;
	const COMBO_BOX = 1;
	const COMMAND_BUTTON = 0;
	const IMAGE = 8;
	const LABEL = 7;
	const LIST_BOX = 3;
	const RADIO_BUTTON = 6;
	const SCROLL_BAR = 10;
	const SPIN_BUTTON = 5;
	const TEXT_BOX = 4;
	const TOGGLE_BUTTON = 9;
	const UNKNOWN = 12;
};

final class CopyFormatType {
	const CLEAR = 2;
	const SAME_AS_ABOVE = 0;
	const SAME_AS_BELOW = 1;
};

final class CountryCode {
	const ALGERIA = 213;
	const AUSTRALIA = 61;
	const AUSTRIA = 43;
	const BELGIUM = 32;
	const BRAZIL = 55;
	const CANADA = 2;
	const CHINA = 86;
	const CZECH = 420;
	const DEFAULT = 0;
	const DENMARK = 45;
	const EGYPT = 20;
	const FINLAND = 358;
	const FRANCE = 33;
	const GERMANY = 49;
	const GREECE = 30;
	const HUNGARY = 36;
	const ICELAND = 354;
	const INDIA = 91;
	const IRAN = 981;
	const IRAQ = 964;
	const ISRAEL = 972;
	const ITALY = 39;
	const JAPAN = 81;
	const JORDAN = 962;
	const KUWAIT = 965;
	const LATIN_AMERIC = 3;
	const LEBANON = 961;
	const LIBYA = 218;
	const MEXICO = 52;
	const MOROCCO = 216;
	const NETHERLANDS = 31;
	const NEW_ZEALAND = 64;
	const NORWAY = 47;
	const POLAND = 48;
	const PORTUGAL = 351;
	const QATAR = 974;
	const RUSSIA = 7;
	const SAUDI = 966;
	const SOUTH_KOREA = 82;
	const SPAIN = 34;
	const SWEDEN = 46;
	const SWITZERLAND = 41;
	const SYRIA = 963;
	const TAIWAN = 886;
	const THAILAND = 66;
	const TURKEY = 90;
	const UNITED_ARAB_EMIRATES = 971;
	const UNITED_KINGDOM = 44;
	const USA = 1;
	const VIET_NAM = 84;
};

final class CredentialsMethodType {
	const INTEGRATED = 0;
	const NONE = 1;
	const PROMPT = 2;
	const STORED = 3;
};

final class CrossType {
	const AUTOMATIC = 0;
	const CUSTOM = 3;
	const MAXIMUM = 1;
	const MINIMUM = 2;
};

final class DataBarAxisPosition {
	const AUTOMATIC = 0;
	const MIDPOINT = 1;
	const NONE = 2;
};

final class DataBarBorderType {
	const NONE = 0;
	const SOLID = 1;
};

final class DataBarFillType {
	const GRADIENT = 1;
	const SOLID = 0;
};

final class DataBarNegativeColorType {
	const COLOR = 0;
	const SAME_AS_POSITIVE = 1;
};

final class DataLabelShapeType {
	const BENT_LINE_CALLOUT = 11;
	const BENT_LINE_WITH_ACCENT_BAR_CALLOUT = 13;
	const DOWN_ARROW_CALLOUT = 4;
	const ELLIPSE = 2;
	const LEFT_ARROW_CALLOUT = 5;
	const LINE = 14;
	const LINE_CALLOUT = 10;
	const LINE_WITH_ACCENT_BAR_CALLOUT = 12;
	const RECT = 0;
	const RIGHT_ARROW_CALLOUT = 3;
	const ROUND_RECT = 1;
	const UP_ARROW_CALLOUT = 6;
	const WEDGE_ELLIPSE_CALLOUT = 9;
	const WEDGE_RECT_CALLOUT = 7;
	const WEDGE_ROUND_RECT_CALLOUT = 8;
};

final class DataLabelsSeparatorType {
	const AUTO = 0;
	const COMMA = 2;
	const CUSTOM = 6;
	const NEW_LINE = 5;
	const PERIOD = 4;
	const SEMICOLON = 3;
	const SPACE = 1;
};

final class DateTimeGroupingType {
	const DAY = 0;
	const HOUR = 1;
	const MINUTE = 2;
	const MONTH = 3;
	const SECOND = 4;
	const YEAR = 5;
};

final class DefaultEditLanguage {
	const AUTO = 0;
	const CJK = 2;
	const ENGLISH = 1;
};

final class DirectoryType {
	const DOWN_DIRECTORY = 2;
	const SAME_VOLUME = 1;
	const UP_DIRECTORY = 3;
	const VOLUME = 0;
};

final class DisplayDrawingObjects {
	const DISPLAY_SHAPES = 0;
	const HIDE = 2;
	const PLACEHOLDERS = 1;
};

final class DisplayUnitType {
	const BILLIONS = 8;
	const CUST = 11;
	const CUSTOM = 12;
	const HUNDRED_MILLIONS = 7;
	const HUNDRED_THOUSANDS = 4;
	const HUNDREDS = 1;
	const MILLIONS = 5;
	const NONE = 0;
	const PERCENTAGE = 10;
	const TEN_MILLIONS = 6;
	const TEN_THOUSANDS = 3;
	const THOUSANDS = 2;
	const TRILLIONS = 9;
};

final class DropButtonStyle {
	const ARROW = 1;
	const ELLIPSIS = 2;
	const PLAIN = 0;
	const REDUCE = 3;
};

final class DynamicFilterType {
	const ABOVE_AVERAGE = 0;
	const APRIL = 12;
	const AUGUST = 16;
	const BELOW_AVERAGE = 1;
	const DECEMBER = 9;
	const FEBRUARY = 10;
	const JANUARY = 6;
	const JULY = 15;
	const JUNE = 14;
	const LAST_MONTH = 2;
	const LAST_QUARTER = 3;
	const LAST_WEEK = 4;
	const LAST_YEAR = 5;
	const MARCH = 11;
	const MAY = 13;
	const NEXT_MONTH = 18;
	const NEXT_QUARTER = 19;
	const NEXT_WEEK = 20;
	const NEXT_YEAR = 21;
	const NONE = 22;
	const NOVEMBER = 8;
	const OCTOBER = 7;
	const QUARTER_1 = 23;
	const QUARTER_2 = 24;
	const QUARTER_3 = 25;
	const QUARTER_4 = 26;
	const SEPTEMBER = 17;
	const THIS_MONTH = 27;
	const THIS_QUARTER = 28;
	const THIS_WEEK = 29;
	const THIS_YEAR = 30;
	const TODAY = 31;
	const TOMORROW = 32;
	const YEAR_TO_DATE = 33;
	const YESTERDAY = 34;
};

final class EmfRenderSetting {
	const EMF_ONLY = 0;
	const EMF_PLUS_PREFER = 1;
};

final class EncryptionType {
	const COMPATIBLE = 1;
	const ENHANCED_CRYPTOGRAPHIC_PROVIDER_V_1 = 2;
	const STRONG_CRYPTOGRAPHIC_PROVIDER = 3;
	const XOR = 0;
};

final class EquationCharacterPositionType {
	const BOTTOM = 1;
	const TOP = 0;
};

final class EquationCombiningCharacterType {
	const ACUTE_ACCENT = 5;
	const BOTTOM_CURLY_BRACKET = 12;
	const BREVE = 7;
	const CARON = 4;
	const CIRCUMFLEX_ACCENT = 3;
	const DIAERESIS = 1;
	const DOT_ABOVE = 0;
	const DOUBLE_OVERLINE = 10;
	const GRAVE_ACCENT = 6;
	const LEFT_ARROW_ABOVE = 13;
	const LEFT_HARPOON_ABOVE = 16;
	const LEFT_RIGHT_ARROW = 20;
	const LEFT_RIGHT_ARROW_ABOVE = 15;
	const LEFT_RIGHT_DOUBLE_ARROW = 23;
	const LEFTWARDS_ARROW = 18;
	const LEFTWARDS_DOUBLE_ARROW = 21;
	const OVERLINE = 9;
	const RIGHT_ARROW_ABOVE = 14;
	const RIGHT_HARPOON_ABOVE = 17;
	const RIGHTWARDS_ARROW = 19;
	const RIGHTWARDS_DOUBLE_ARROW = 22;
	const THREE_DOTS_ABOVE = 2;
	const TILDE = 8;
	const TOP_CURLY_BRACKET = 11;
	const UNKNOWN = -1;
};

final class EquationDelimiterShapeType {
	const CENTERED = 0;
	const MATCH = 1;
};

final class EquationFractionType {
	const BAR = 0;
	const LINEAR = 2;
	const NO_BAR = 1;
	const SKEWED = 3;
};

final class EquationHorizontalJustificationType {
	const CENTER = 0;
	const CENTER_GROUP = 1;
	const LEFT = 2;
	const RIGHT = 3;
};

final class EquationLimitLocationType {
	const SUB_SUP = 1;
	const UND_OVR = 0;
};

final class EquationMathematicalOperatorType {
	const ANTICLOCKWISE_CONTOUR_INTEGRAL = 30;
	const CLOCKWISE = 28;
	const CLOCKWISE_CONTOUR_INTEGRAL = 29;
	const COMPLEMENT = 1;
	const CONTAIN = 11;
	const CONTOUR_INTEGRAL = 25;
	const DOUBLE_INTEGRAL = 23;
	const ELEMENT_OF = 8;
	const EMPTY_SET = 5;
	const END_OF_PROOF = 14;
	const EXISTS = 3;
	const FOR_ALL = 0;
	const INCREMENT = 6;
	const INTEGRAL = 22;
	const INTERSECTION = 20;
	const LOGICAL_AND = 18;
	const LOGICAL_OR = 19;
	const NABLA = 7;
	const NARY_COPRODUCT = 16;
	const NARY_INTERSECTION = 33;
	const NARY_LOGICAL_AND = 31;
	const NARY_LOGICAL_OR = 32;
	const NARY_PRODUCT = 15;
	const NARY_SUMMATION = 17;
	const NARY_UNION = 34;
	const NOT_AN_ELEMENT_OF = 9;
	const NOT_CONTAIN = 12;
	const NOT_EXISTS = 4;
	const PARTIAL_DIFFERENTIAL = 2;
	const SMALL_CONTAIN = 13;
	const SMALL_ELEMENT_OF = 10;
	const SURFACE_INTEGRAL = 26;
	const TRIPLE_INTEGRAL = 24;
	const UNION = 21;
	const UNKNOWN = -1;
	const VOLUME_INTEGRAL = 27;
};

final class EquationNodeType {
	const ACCENT = 211;
	const ACCENT_EQUATION = 211;
	const ARRAY_EQUATION = 317;
	const BAR = 212;
	const BAR_EQUATION = 212;
	const BASE = 100;
	const BORDER_BOX = 213;
	const BORDER_BOX_EQUATION = 213;
	const BOX = 214;
	const BOX_EQUATION = 214;
	const DEGREE = 106;
	const DELIMITER = 204;
	const DELIMITER_EQUATION = 204;
	const DENOMINATOR = 101;
	const EQUATION_PARAGRAPH = 200;
	const FRACTION = 202;
	const FRACTION_EQUATION = 202;
	const FUNCTION = 203;
	const FUNCTION_EQUATION = 203;
	const FUNCTION_NAME = 103;
	const GROUP_CHARACTER_EQUATION = 215;
	const GROUP_CHR = 215;
	const LIMIT = 108;
	const LOWER_LIMIT = 217;
	const MATHEMATICAL = 201;
	const MATHEMATICAL_EQUATION = 201;
	const MATRIX = 216;
	const MATRIX_EQUATION = 216;
	const MATRIX_ROW = 107;
	const NARY = 205;
	const NARY_EQUATION = 205;
	const NUMERATOR = 102;
	const PRE_SUB_SUP = 210;
	const PRE_SUB_SUP_EQUATION = 210;
	const RADICAL = 206;
	const RADICAL_EQUATION = 206;
	const SUB = 208;
	const SUB_SUP = 209;
	const SUB_SUP_EQUATION = 209;
	const SUBSCRIPT = 104;
	const SUBSCRIPT_EQUATION = 208;
	const SUP = 207;
	const SUPERSCRIPT = 105;
	const SUPERSCRIPT_EQUATION = 207;
	const TEXT = 1;
	const UN_KNOW = 0;
	const UPPER_LIMIT = 218;
};

final class EquationVerticalJustificationType {
	const BOTTOM = 2;
	const CENTER = 1;
	const TOP = 0;
};

final class ErrorBarDisplayType {
	const BOTH = 0;
	const MINUS = 1;
	const NONE = 2;
	const PLUS = 3;
};

final class ErrorBarType {
	const CUSTOM = 0;
	const FIXED_VALUE = 1;
	const PERCENT = 2;
	const ST_DEV = 3;
	const ST_ERROR = 4;
};

final class ErrorCellValueType {
	const BLOCKED = 10;
	const BUSY = 14;
	const CALC = 13;
	const CONNECT = 9;
	const EXTERNAL = 18;
	const FIELD = 12;
	const NAME = 4;
	const SPILL = 8;
	const TIME_OUT = 19;
	const UNKNOWN = 11;
};

final class ErrorCheckType {
	const CALC = 1;
	const CALCULATED_COLUMN = 129;
	const EMPTY_CELL_REF = 2;
	const EVALUATION_ERROR = 1;
	const INCONSIST_FORMULA = 16;
	const INCONSIST_RANGE = 8;
	const NUMBER_STORED_AS_TEXT = 4;
	const TABLE_DATA_VALIDATION = 128;
	const TEXT_DATE = 32;
	const TEXT_NUMBER = 4;
	const TWO_DIGIT_TEXT_YEAR = 32;
	const UNLOCKED_FORMULA = 64;
	const UNPROCTED_FORMULA = 64;
	const VALIDATION = 128;
};

final class ExceptionType {
	const AUTO_FILTER = 27;
	const CHART = 0;
	const CONDITIONAL_FORMATTING = 3;
	const DATA_TYPE = 1;
	const DATA_VALIDATION = 2;
	const DEFINED_NAME = 25;
	const FILE_CORRUPTED = 23;
	const FILE_FORMAT = 4;
	const FONT = 26;
	const FONT_SUBSTITUTION = 28;
	const FORMULA = 5;
	const INCORRECT_PASSWORD = 8;
	const INTERRUPTED = 17;
	const INVALID_DATA = 6;
	const INVALID_OPERATOR = 7;
	const IO = 18;
	const LICENSE = 9;
	const LIMITATION = 10;
	const PAGE_SETUP = 11;
	const PERMISSION = 19;
	const PIVOT_TABLE = 12;
	const SHAPE = 13;
	const SHEET_NAME = 15;
	const SHEET_TYPE = 16;
	const SPARKLINE = 14;
	const UNDISCLOSED_INFORMATION = 22;
	const UNSUPPORTED_FEATURE = 20;
	const UNSUPPORTED_STREAM = 21;
};

final class ExternalConnectionClassType {
	const DATA_MODEL = 3;
	const DATABASE = 0;
	const TEXT_BASED = 2;
	const UNKOWN = 4;
	const WEB_QUERY = 1;
};

final class ExternalLinkType {
	const DDE_LINK = 0;
	const EXTERNAL = 1;
};

final class FileFormatType {
	const AZW_3 = 777;
	const BMP = 54;
	const CHM = 784;
	const CSV = 1;
	const DBF = 515;
	const DIF = 30;
	const DOC = 31;
	const DOCM = 38;
	const DOCX = 27;
	const DOTM = 40;
	const DOTX = 39;
	const EMF = 258;
	const EPUB = 775;
	const EXCEL_2 = 25;
	const EXCEL_3 = 24;
	const EXCEL_4 = 23;
	const EXCEL_95 = 22;
	const EXCEL_97_TO_2003 = 5;
	const FODS = 59;
	const G_ZIP = 35615;
	const GIF = 322;
	const GRAPH_CHART = 58;
	const HTML = 12;
	const JPG = 261;
	const JSON = 513;
	const M_HTML = 17;
	const MAPI_MESSAGE = 33;
	const MARKDOWN = 57;
	const MICROSOFT_CABINET = 773;
	const MS_EQUATION = 34;
	const NUMBERS = 56;
	const NUMBERS_09 = 56;
	const NUMBERS_35 = 62;
	const ODF = 49;
	const ODG = 50;
	const ODP = 48;
	const ODS = 14;
	const ODT = 47;
	const OLE = 64;
	const OLE_10_NATIVE = 35;
	const ONE_NOTE = 772;
	const OOXML = 46;
	const OTP = 61;
	const OTS = 55;
	const OTT = 53;
	const OXPS = 776;
	const PDF = 13;
	const PNG = 262;
	const POTM = 43;
	const POTX = 42;
	const PPSM = 45;
	const PPSX = 44;
	const PPT = 32;
	const PPTM = 41;
	const PPTX = 26;
	const RTF = 774;
	const SPREADSHEET_ML = 15;
	const SQL_SCRIPT = 514;
	const SVG = 28;
	const SXC = 60;
	const TAB_DELIMITED = 11;
	const TIFF = 21;
	const TSV = 11;
	const UNKNOWN = 255;
	const VSD = 36;
	const VSDX = 37;
	const WEB_P = 323;
	const WMF = 259;
	const X_HTML = 771;
	const XLAM = 10;
	const XLSB = 16;
	const XLSM = 7;
	const XLSX = 6;
	const XLT = 52;
	const XLTM = 9;
	const XLTX = 8;
	const XML = 51;
	const XPS = 20;
};

final class FillPattern {
	const DARK_DOWNWARD_DIAGONAL = 16;
	const DARK_HORIZONTAL = 25;
	const DARK_UPWARD_DIAGONAL = 17;
	const DARK_VERTICAL = 24;
	const DASHED_DOWNWARD_DIAGONAL = 26;
	const DASHED_HORIZONTAL = 29;
	const DASHED_UPWARD_DIAGONAL = 27;
	const DASHED_VERTICAL = 28;
	const DIAGONAL_BRICK = 34;
	const DIVOT = 38;
	const DOTTED_DIAMOND = 40;
	const DOTTED_GRID = 39;
	const GRAY_10 = 3;
	const GRAY_20 = 4;
	const GRAY_25 = 13;
	const GRAY_30 = 5;
	const GRAY_40 = 6;
	const GRAY_5 = 2;
	const GRAY_50 = 7;
	const GRAY_60 = 8;
	const GRAY_70 = 9;
	const GRAY_75 = 10;
	const GRAY_80 = 11;
	const GRAY_90 = 12;
	const HORIZONTAL_BRICK = 35;
	const LARGE_CHECKER_BOARD = 47;
	const LARGE_CONFETTI = 31;
	const LARGE_GRID = 45;
	const LIGHT_DOWNWARD_DIAGONAL = 14;
	const LIGHT_HORIZONTAL = 21;
	const LIGHT_UPWARD_DIAGONAL = 15;
	const LIGHT_VERTICAL = 20;
	const NARROW_HORIZONTAL = 23;
	const NARROW_VERTICAL = 22;
	const NONE = 0;
	const OUTLINED_DIAMOND = 48;
	const PLAID = 37;
	const SHINGLE = 41;
	const SMALL_CHECKER_BOARD = 46;
	const SMALL_CONFETTI = 30;
	const SMALL_GRID = 44;
	const SOLID = 1;
	const SOLID_DIAMOND = 49;
	const SPHERE = 43;
	const TRELLIS = 42;
	const UNKNOWN = 50;
	const WAVE = 33;
	const WEAVE = 36;
	const WIDE_DOWNWARD_DIAGONAL = 18;
	const WIDE_UPWARD_DIAGONAL = 19;
	const ZIG_ZAG = 32;
};

final class FillPictureType {
	const STACK = 1;
	const STACK_AND_SCALE = 2;
	const STRETCH = 0;
};

final class FillType {
	const AUTOMATIC = 0;
	const GRADIENT = 3;
	const GROUP = 6;
	const NONE = 1;
	const PATTERN = 5;
	const SOLID = 2;
	const TEXTURE = 4;
};

final class FilterCategory {
	const DATE = 3;
	const LABEL = 1;
	const NONE = 0;
	const NUMBER_VALUE = 2;
	const TOP_10 = 4;
};

final class FilterOperatorType {
	const BEGINS_WITH = 7;
	const CONTAINS = 9;
	const ENDS_WITH = 8;
	const EQUAL = 2;
	const GREATER_OR_EQUAL = 5;
	const GREATER_THAN = 3;
	const LESS_OR_EQUAL = 0;
	const LESS_THAN = 1;
	const NONE = 6;
	const NOT_BEGINS_WITH = 11;
	const NOT_CONTAINS = 10;
	const NOT_ENDS_WITH = 12;
	const NOT_EQUAL = 4;
};

final class FilterType {
	const COLOR_FILTER = 0;
	const CUSTOM_FILTERS = 1;
	const DYNAMIC_FILTER = 2;
	const ICON_FILTER = 4;
	const MULTIPLE_FILTERS = 3;
	const NONE = 6;
	const TOP_10 = 5;
};

final class FontFileFormatType {
	const OTF = 2;
	const TTC = 3;
	const TTF = 1;
	const UNKNOWN = 0;
};

final class FontSchemeType {
	const MAJOR = 1;
	const MINOR = 2;
	const NONE = 0;
};

final class FontSourceType {
	const FONT_FILE = 0;
	const FONTS_FOLDER = 1;
	const MEMORY_FONT = 2;
};

final class FontUnderlineType {
	const ACCOUNTING = 3;
	const DASH = 5;
	const DASH_DOT_DOT_HEAVY = 6;
	const DASH_DOT_HEAVY = 7;
	const DASH_LONG = 9;
	const DASH_LONG_HEAVY = 10;
	const DASHED_HEAVY = 8;
	const DOT_DASH = 11;
	const DOT_DOT_DASH = 12;
	const DOTTED = 13;
	const DOTTED_HEAVY = 14;
	const DOUBLE = 2;
	const DOUBLE_ACCOUNTING = 4;
	const HEAVY = 15;
	const NONE = 0;
	const SINGLE = 1;
	const WAVE = 16;
	const WAVY_DOUBLE = 17;
	const WAVY_HEAVY = 18;
	const WORDS = 19;
};

final class FormatConditionType {
	const ABOVE_AVERAGE = 16384;
	const BEGINS_WITH = 128;
	const CELL_VALUE = 1;
	const COLOR_SCALE = 32768;
	const CONTAINS_BLANKS = 512;
	const CONTAINS_ERRORS = 2048;
	const CONTAINS_TEXT = 32;
	const DATA_BAR = 65536;
	const DUPLICATE_VALUES = 16;
	const ENDS_WITH = 256;
	const EXPRESSION = 2;
	const ICON_SET = 131072;
	const NOT_CONTAINS_BLANKS = 1024;
	const NOT_CONTAINS_ERRORS = 4096;
	const NOT_CONTAINS_TEXT = 64;
	const TIME_PERIOD = 8192;
	const TOP_10 = 4;
	const UNIQUE_VALUES = 8;
};

final class FormatConditionValueType {
	const AUTOMATIC_MAX = 6;
	const AUTOMATIC_MIN = 7;
	const FORMULA = 0;
	const MAX = 1;
	const MIN = 2;
	const NUMBER = 3;
	const PERCENT = 4;
	const PERCENTILE = 5;
};

final class FormatSetType {
	const IS_GRADIENT_SET = 1;
	const IS_PATTERN_SET = 3;
	const IS_TEXTURE_SET = 2;
	const NONE = 0;
};

final class FormattingType {
	const AUTOMATIC = 0;
	const CUSTOM = 2;
	const NONE = 1;
};

final class FormulaType {
	const ARRAY = 1;
	const FORMULA_TYPE_ARRAY = 1;
	const FORMULA_TYPE_NONE = -1;
	const FORMULA_TYPE_NORMAL = 0;
	const FORMULA_TYPE_SHARED = 2;
	const FORMULA_TYPE_TABLE = 3;
	const NONE = -1;
	const NORMAL = 0;
	const SHARED = 2;
	const TABLE = 3;
};

final class GradientColorType {
	const NONE = 0;
	const ONE_COLOR = 1;
	const PRESET_COLORS = 2;
	const TWO_COLORS = 3;
};

final class GradientDirectionType {
	const FROM_CENTER = 4;
	const FROM_LOWER_LEFT_CORNER = 2;
	const FROM_LOWER_RIGHT_CORNER = 3;
	const FROM_UPPER_LEFT_CORNER = 0;
	const FROM_UPPER_RIGHT_CORNER = 1;
	const UNKNOWN = 5;
};

final class GradientFillType {
	const LINEAR = 0;
	const PATH = 3;
	const RADIAL = 1;
	const RECTANGLE = 2;
};

final class GradientPresetType {
	const BRASS = 0;
	const CALM_WATER = 1;
	const CHROME = 2;
	const CHROME_II = 3;
	const DAYBREAK = 4;
	const DESERT = 5;
	const EARLY_SUNSET = 6;
	const FIRE = 7;
	const FOG = 8;
	const GOLD = 9;
	const GOLD_II = 10;
	const HORIZON = 11;
	const LATE_SUNSET = 12;
	const MAHOGANY = 13;
	const MOSS = 14;
	const NIGHTFALL = 15;
	const OCEAN = 16;
	const PARCHMENT = 17;
	const PEACOCK = 18;
	const RAINBOW = 19;
	const RAINBOW_II = 20;
	const SAPPHIRE = 21;
	const SILVER = 22;
	const UNKNOWN = 24;
	const WHEAT = 23;
};

final class GradientStyleType {
	const DIAGONAL_DOWN = 0;
	const DIAGONAL_UP = 1;
	const FROM_CENTER = 2;
	const FROM_CORNER = 3;
	const HORIZONTAL = 4;
	const UNKNOWN = 6;
	const VERTICAL = 5;
};

final class GridlineType {
	const DOTTED = 0;
	const HAIR = 1;
};

final class HeaderFooterCommandType {
	const CURRENT_DATE = 3;
	const CURRENT_PAGE = 1;
	const CURRENT_TIME = 4;
	const FILE_NAME = 6;
	const FILE_PATH = 7;
	const PAGECOUNT = 2;
	const PICTURE = 8;
	const SHEET_NAME = 5;
	const TEXT = 0;
};

final class HtmlCrossType {
	const CROSS = 2;
	const CROSS_HIDE_RIGHT = 3;
	const DEFAULT = 0;
	const FIT_TO_CELL = 4;
	const MS_EXPORT = 1;
};

final class HtmlExportDataOptions {
	const ALL = 255;
	const TABLE = 1;
};

final class HtmlFormatHandlingType {
	const ALL = 0;
	const NONE = 1;
	const RTF = 2;
};

final class HtmlHiddenColDisplayType {
	const HIDDEN = 0;
	const REMOVE = 1;
};

final class HtmlHiddenRowDisplayType {
	const HIDDEN = 0;
	const REMOVE = 1;
};

final class HtmlLinkTargetType {
	const BLANK = 0;
	const PARENT = 1;
	const SELF = 2;
	const TOP = 3;
};

final class HtmlOfficeMathOutputType {
	const IMAGE = 0;
	const MATH_ML = 1;
};

final class HtmlVersion {
	const DEFAULT = 0;
	const HTML_5 = 2;
	const X_HTML = 1;
};

final class IconSetType {
	const ARROWS_3 = 0;
	const ARROWS_4 = 8;
	const ARROWS_5 = 13;
	const ARROWS_GRAY_3 = 1;
	const ARROWS_GRAY_4 = 9;
	const ARROWS_GRAY_5 = 14;
	const BOXES_5 = 18;
	const COLOR_SMILIES_3 = 23;
	const CUSTOM_SET = 21;
	const FLAGS_3 = 2;
	const NONE = 20;
	const QUARTERS_5 = 15;
	const RATING_4 = 10;
	const RATING_5 = 16;
	const RED_TO_BLACK_4 = 11;
	const SIGNS_3 = 3;
	const SMILIES_3 = 22;
	const STARS_3 = 17;
	const SYMBOLS_3 = 4;
	const SYMBOLS_32 = 5;
	const TRAFFIC_LIGHTS_31 = 6;
	const TRAFFIC_LIGHTS_32 = 7;
	const TRAFFIC_LIGHTS_4 = 12;
	const TRIANGLES_3 = 19;
};

final class ImageBinarizationMethod {
	const FLOYD_STEINBERG_DITHERING = 1;
	const THRESHOLD = 0;
};

final class ImageType {
	const BMP = 7;
	const EMF = 2;
	const GIF = 66;
	const GLTF = 70;
	const JPEG = 5;
	const OFFICE_COMPATIBLE_EMF = 71;
	const PICT = 4;
	const PNG = 6;
	const SVG = 68;
	const SVM = 69;
	const TIFF = 67;
	const UNKNOWN = 0;
	const WEB_P = 72;
	const WMF = 3;
};

final class InputMethodEditorMode {
	const ALPHA = 8;
	const ALPHA_FULL = 7;
	const DISABLE = 3;
	const HANGUL = 10;
	const HANGUL_FULL = 9;
	const HANZI = 12;
	const HANZI_FULL = 11;
	const HIRAGANA = 4;
	const KATAKANA = 5;
	const KATAKANA_HALF = 6;
	const NO_CONTROL = 0;
	const OFF = 2;
	const ON = 1;
};

final class JsonExportHyperlinkType {
	const ADDRESS = 1;
	const DISPLAY_STRING = 0;
	const HTML_STRING = 2;
};

final class LabelPositionType {
	const ABOVE = 4;
	const BELOW = 5;
	const BEST_FIT = 8;
	const CENTER = 0;
	const INSIDE_BASE = 1;
	const INSIDE_END = 2;
	const LEFT = 6;
	const MOVED = 9;
	const OUTSIDE_END = 3;
	const RIGHT = 7;
};

final class LegendPositionType {
	const BOTTOM = 0;
	const CORNER = 1;
	const LEFT = 4;
	const NOT_DOCKED = 7;
	const RIGHT = 3;
	const TOP = 2;
};

final class LightRigDirectionType {
	const BOTTOM = 0;
	const BOTTOM_LEFT = 1;
	const BOTTOM_RIGHT = 2;
	const LEFT = 3;
	const RIGHT = 4;
	const TOP = 5;
	const TOP_LEFT = 6;
	const TOP_RIGHT = 7;
};

final class LightRigType {
	const BALANCED = 0;
	const BRIGHT_ROOM = 1;
	const CHILLY = 2;
	const CONTRASTING = 3;
	const FLAT = 4;
	const FLOOD = 5;
	const FREEZING = 6;
	const GLOW = 7;
	const HARSH = 8;
	const LEGACY_FLAT_1 = 9;
	const LEGACY_FLAT_2 = 10;
	const LEGACY_FLAT_3 = 11;
	const LEGACY_FLAT_4 = 12;
	const LEGACY_HARSH_1 = 13;
	const LEGACY_HARSH_2 = 14;
	const LEGACY_HARSH_3 = 15;
	const LEGACY_HARSH_4 = 16;
	const LEGACY_NORMAL_1 = 17;
	const LEGACY_NORMAL_2 = 18;
	const LEGACY_NORMAL_3 = 19;
	const LEGACY_NORMAL_4 = 20;
	const MORNING = 21;
	const NONE = 27;
	const SOFT = 22;
	const SUNRISE = 23;
	const SUNSET = 24;
	const THREE_POINT = 25;
	const TWO_POINT = 26;
};

final class LineCapType {
	const FLAT = 2;
	const NONE = 3;
	const ROUND = 1;
	const SQUARE = 0;
};

final class LineJoinType {
	const BEVEL = 1;
	const MITER = 2;
	const NONE = 3;
	const ROUND = 0;
};

final class LineSpaceSizeType {
	const PERCENTAGE = 0;
	const POINTS = 1;
};

final class LineType {
	const DARK_GRAY = 6;
	const DASH = 1;
	const DASH_DOT = 3;
	const DASH_DOT_DOT = 4;
	const DOT = 2;
	const LIGHT_GRAY = 8;
	const MEDIUM_GRAY = 7;
	const SOLID = 0;
};

final class LoadDataFilterOptions {
	const ALL = 2147483647;
	const BOOK_SETTINGS = 1048576;
	const CELL_BLANK = 1;
	const CELL_BOOL = 16;
	const CELL_DATA = 67108927;
	const CELL_ERROR = 8;
	const CELL_NUMERIC = 4;
	const CELL_STRING = 2;
	const CELL_VALUE = 31;
	const CHART = 256;
	const CONDITIONAL_FORMATTING = 2048;
	const DATA_VALIDATION = 4096;
	const DEFINED_NAMES = 16777216;
	const DOCUMENT_PROPERTIES = 8388608;
	const DRAWING = 402653952;
	const FORMULA = 32;
	const HYPERLINKS = 32768;
	const MERGED_AREA = 1024;
	const NONE = 0;
	const OLE_OBJECT = 268435456;
	const PICTURE = 134217728;
	const PIVOT_TABLE = 8192;
	const REVISION = 536870912;
	const SETTINGS = 1114112;
	const SHAPE = 402653696;
	const SHEET_DATA = 403701759;
	const SHEET_SETTINGS = 65536;
	const STRUCTURE = 4194304;
	const STYLE = 67108864;
	const TABLE = 16384;
	const VBA = 33554432;
	const XML_MAP = 2097152;
};

final class LoadFormat {
	const AUTO = 0;
	const AZW_3 = 53;
	const CHM = 54;
	const CSV = 1;
	const DBF = 515;
	const DIF = 30;
	const EPUB = 52;
	const EXCEL_97_TO_2003 = 5;
	const FODS = 59;
	const HTML = 12;
	const IMAGE = 254;
	const JSON = 513;
	const M_HTML = 13;
	const MARKDOWN = 55;
	const NUMBERS = 56;
	const ODS = 14;
	const OTS = 31;
	const SPREADSHEET_ML = 15;
	const SXC = 60;
	const TAB_DELIMITED = 11;
	const TSV = 11;
	const UNKNOWN = 255;
	const XLSB = 16;
	const XLSX = 6;
	const XML = 51;
};

final class LoadNumbersTableType {
	const ONE_TABLE_PER_SHEET = 1;
	const OVERRIDE_OTHER_TABLES = 2;
	const TILE_TABLES = 4;
};

final class LookAtType {
	const CONTAINS = 0;
	const END_WITH = 2;
	const ENTIRE_CONTENT = 3;
	const START_WITH = 1;
};

final class LookInType {
	const COMMENTS = 3;
	const FORMATTED_VALUES = 6;
	const FORMULAS = 0;
	const ONLY_FORMULAS = 4;
	const ORIGINAL_VALUES = 5;
	const VALUES = 1;
	const VALUES_EXCLUDE_FORMULA_CELL = 2;
};

final class MapChartLabelLayout {
	const BEST_FIT_ONLY = 0;
	const NONE = 2;
	const SHOW_ALL = 1;
};

final class MapChartProjectionType {
	const ALBERS = 3;
	const AUTOMATIC = 0;
	const MERCATOR = 1;
	const MILLER = 2;
};

final class MapChartRegionType {
	const AUTOMATIC = 0;
	const COUNTRY_REGION_LIST = 2;
	const DATA_ONLY = 1;
	const WORLD = 3;
};

final class MarkdownTableHeaderType {
	const COLUMN_HEADER = 1;
	const EMPTY = 2;
	const FIRST_ROW = 0;
};

final class MemorySetting {
	const MEMORY_PREFERENCE = 1;
	const NORMAL = 0;
};

final class MergedCellsShrinkType {
	const KEEP_HEADER_ONLY = 2;
	const NONE = 0;
	const SHRINK_TO_FIT = 1;
};

final class MergeEmptyTdType {
	const DEFAULT = 0;
	const MERGE_FORCELY = 2;
	const NONE = 1;
};

final class MetadataType {
	const DECRYPTION = 2;
	const DOCUMENT_PROPERTIES = 4;
	const ENCRYPTION = 1;
};

final class MirrorType {
	const BOTH = 3;
	const HORIZONAL = 1;
	const NONE = 0;
	const VERTICAL = 2;
};

final class MsoArrowheadLength {
	const LONG = 2;
	const MEDIUM = 1;
	const SHORT = 0;
};

final class MsoArrowheadStyle {
	const ARROW = 1;
	const ARROW_DIAMOND = 3;
	const ARROW_OPEN = 5;
	const ARROW_OVAL = 4;
	const ARROW_STEALTH = 2;
	const NONE = 0;
};

final class MsoArrowheadWidth {
	const MEDIUM = 1;
	const NARROW = 0;
	const WIDE = 2;
};

final class MsoDrawingType {
	const ARC = 4;
	const BUTTON = 7;
	const CELLS_DRAWING = 30;
	const CHART = 5;
	const CHECK_BOX = 11;
	const COMBO_BOX = 20;
	const COMMENT = 25;
	const CUSTOM_XML = 34;
	const DIALOG_BOX = 15;
	const GROUP = 0;
	const GROUP_BOX = 19;
	const LABEL = 14;
	const LINE = 1;
	const LIST_BOX = 18;
	const MODEL_3_D = 36;
	const OLE_OBJECT = 24;
	const OVAL = 3;
	const PICTURE = 8;
	const POLYGON = 9;
	const RADIO_BUTTON = 12;
	const RECTANGLE = 2;
	const SCROLL_BAR = 17;
	const SLICER = 31;
	const SMART_ART = 33;
	const SPINNER = 16;
	const TEXT_BOX = 6;
	const TIMELINE = 35;
	const UNKNOWN = 29;
	const WEB_EXTENSION = 32;
};

final class MsoLineDashStyle {
	const CUSTOM = 8;
	const DASH = 0;
	const DASH_DOT = 1;
	const DASH_DOT_DOT = 2;
	const DASH_LONG_DASH = 3;
	const DASH_LONG_DASH_DOT = 4;
	const ROUND_DOT = 5;
	const SOLID = 6;
	const SQUARE_DOT = 7;
};

final class MsoLineStyle {
	const SINGLE = 0;
	const THICK_BETWEEN_THIN = 1;
	const THICK_THIN = 3;
	const THIN_THICK = 2;
	const THIN_THIN = 4;
};

final class MsoPresetTextEffect {
	const TEXT_EFFECT_1 = 0;
	const TEXT_EFFECT_10 = 9;
	const TEXT_EFFECT_11 = 10;
	const TEXT_EFFECT_12 = 11;
	const TEXT_EFFECT_13 = 12;
	const TEXT_EFFECT_14 = 13;
	const TEXT_EFFECT_15 = 14;
	const TEXT_EFFECT_16 = 15;
	const TEXT_EFFECT_17 = 16;
	const TEXT_EFFECT_18 = 17;
	const TEXT_EFFECT_19 = 18;
	const TEXT_EFFECT_2 = 1;
	const TEXT_EFFECT_20 = 19;
	const TEXT_EFFECT_21 = 20;
	const TEXT_EFFECT_22 = 21;
	const TEXT_EFFECT_23 = 22;
	const TEXT_EFFECT_24 = 23;
	const TEXT_EFFECT_25 = 24;
	const TEXT_EFFECT_26 = 25;
	const TEXT_EFFECT_27 = 26;
	const TEXT_EFFECT_28 = 27;
	const TEXT_EFFECT_29 = 28;
	const TEXT_EFFECT_3 = 2;
	const TEXT_EFFECT_30 = 29;
	const TEXT_EFFECT_4 = 3;
	const TEXT_EFFECT_5 = 4;
	const TEXT_EFFECT_6 = 5;
	const TEXT_EFFECT_7 = 6;
	const TEXT_EFFECT_8 = 7;
	const TEXT_EFFECT_9 = 8;
};

final class MsoPresetTextEffectShape {
	const ARCH_DOWN_CURVE = 145;
	const ARCH_DOWN_POUR = 149;
	const ARCH_UP_CURVE = 144;
	const ARCH_UP_POUR = 148;
	const BUTTON_CURVE = 147;
	const BUTTON_POUR = 151;
	const CAN_DOWN = 175;
	const CAN_UP = 174;
	const CASCADE_DOWN = 155;
	const CASCADE_UP = 154;
	const CHEVRON_DOWN = 141;
	const CHEVRON_UP = 140;
	const CIRCLE_CURVE = 146;
	const CIRCLE_POUR = 150;
	const CURVE_DOWN = 153;
	const CURVE_UP = 152;
	const DEFLATE = 161;
	const DEFLATE_BOTTOM = 163;
	const DEFLATE_INFLATE = 166;
	const DEFLATE_INFLATE_DEFLATE = 167;
	const DEFLATE_TOP = 165;
	const DOUBLE_WAVE_1 = 158;
	const DOUBLE_WAVE_2 = 159;
	const FADE_DOWN = 171;
	const FADE_LEFT = 169;
	const FADE_RIGHT = 168;
	const FADE_UP = 170;
	const INFLATE = 160;
	const INFLATE_BOTTOM = 162;
	const INFLATE_TOP = 164;
	const MIXED = 255;
	const PLAIN_TEXT = 136;
	const RING_INSIDE = 142;
	const RING_OUTSIDE = 143;
	const SLANT_DOWN = 173;
	const SLANT_UP = 172;
	const STOP = 137;
	const TRIANGLE_DOWN = 139;
	const TRIANGLE_UP = 138;
	const WAVE_1 = 156;
	const WAVE_2 = 157;
};

final class NameScopeType {
	const ALL = 0;
	const WORKBOOK = 1;
	const WORKSHEET = 2;
};

final class NumberCategoryType {
	const DATE = 3;
	const FRACTION = 5;
	const GENERAL = 0;
	const NUMBER = 2;
	const SCIENTIFIC = 6;
	const TEXT = 1;
	const TIME = 4;
};

final class OdsCellFieldType {
	const DATE = 0;
	const SHEET_NAME = 1;
	const TITLE = 2;
};

final class OdsGeneratorType {
	const LIBRE_OFFICE = 0;
	const OPEN_OFFICE = 1;
};

final class OdsPageBackgroundGraphicPositionType {
	const BOTTOM_CENTER = 7;
	const BOTTOM_LEFT = 6;
	const BOTTOM_RIGHT = 8;
	const CENTER_CENTER = 4;
	const CENTER_LEFT = 3;
	const CENTER_RIGHT = 5;
	const TOP_CENTER = 1;
	const TOP_LEFT = 0;
	const TOP_RIGHT = 2;
};

final class OdsPageBackgroundGraphicType {
	const AREA = 1;
	const POSITION = 0;
	const TILE = 2;
};

final class OdsPageBackgroundType {
	const COLOR = 1;
	const GRAPHIC = 2;
	const NONE = 0;
};

final class OLEDBCommandType {
	const CUBE_NAME = 1;
	const DEFAULT_INFORMATION = 4;
	const NONE = 0;
	const SQL_STATEMENT = 2;
	const TABLE_COLLECTION = 6;
	const TABLE_NAME = 3;
	const WEB_BASED_LIST = 5;
};

final class OoxmlCompliance {
	const ECMA_376_2006 = 0;
	const ISO_29500_2008_STRICT = 1;
};

final class OoxmlCompressionType {
	const LEVEL_1 = 1;
	const LEVEL_2 = 2;
	const LEVEL_3 = 3;
	const LEVEL_4 = 4;
	const LEVEL_5 = 5;
	const LEVEL_6 = 6;
	const LEVEL_7 = 7;
	const LEVEL_8 = 8;
	const LEVEL_9 = 9;
};

final class OpenDocumentFormatVersionType {
	const NONE = 0;
	const ODF_11 = 1;
	const ODF_12 = 2;
	const ODF_13 = 3;
};

final class OperatorType {
	const BETWEEN = 0;
	const EQUAL = 1;
	const GREATER_OR_EQUAL = 3;
	const GREATER_THAN = 2;
	const LESS_OR_EQUAL = 5;
	const LESS_THAN = 4;
	const NONE = 6;
	const NOT_BETWEEN = 7;
	const NOT_EQUAL = 8;
};

final class PageLayoutAlignmentType {
	const BOTTOM = 0;
	const CENTER = 1;
	const LEFT = 2;
	const RIGHT = 3;
	const TOP = 4;
};

final class PageOrientationType {
	const LANDSCAPE = 0;
	const PORTRAIT = 1;
};

final class PaneStateType {
	const FROZEN = 0;
	const FROZEN_SPLIT = 1;
	const NORMAL = 3;
	const SPLIT = 2;
};

final class PaperSizeType {
	const CUSTOM = 0;
	const PAPER_10_X_11 = 45;
	const PAPER_10_X_14 = 16;
	const PAPER_11_X_17 = 17;
	const PAPER_12_X_11 = 90;
	const PAPER_15_X_11 = 46;
	const PAPER_9_X_11 = 44;
	const PAPER_A_2 = 66;
	const PAPER_A_3 = 8;
	const PAPER_A_3_EXTRA = 63;
	const PAPER_A_3_EXTRA_TRANSVERSE = 68;
	const PAPER_A_3_ROTATED = 76;
	const PAPER_A_3_TRANSVERSE = 67;
	const PAPER_A_4 = 9;
	const PAPER_A_4_EXTRA = 53;
	const PAPER_A_4_PLUS = 60;
	const PAPER_A_4_ROTATED = 77;
	const PAPER_A_4_SMALL = 10;
	const PAPER_A_4_TRANSVERSE = 55;
	const PAPER_A_5 = 11;
	const PAPER_A_5_EXTRA = 64;
	const PAPER_A_5_ROTATED = 78;
	const PAPER_A_5_TRANSVERSE = 61;
	const PAPER_A_6 = 70;
	const PAPER_A_6_ROTATED = 83;
	const PAPER_B_3 = 300;
	const PAPER_B_4 = 12;
	const PAPER_B_5 = 13;
	const PAPER_BUSINESS_CARD = 301;
	const PAPER_C_SHEET = 24;
	const PAPER_D_SHEET = 25;
	const PAPER_E_SHEET = 26;
	const PAPER_ENVELOPE_10 = 20;
	const PAPER_ENVELOPE_11 = 21;
	const PAPER_ENVELOPE_12 = 22;
	const PAPER_ENVELOPE_14 = 23;
	const PAPER_ENVELOPE_9 = 19;
	const PAPER_ENVELOPE_B_4 = 33;
	const PAPER_ENVELOPE_B_5 = 34;
	const PAPER_ENVELOPE_B_6 = 35;
	const PAPER_ENVELOPE_C_3 = 29;
	const PAPER_ENVELOPE_C_4 = 30;
	const PAPER_ENVELOPE_C_5 = 28;
	const PAPER_ENVELOPE_C_6 = 31;
	const PAPER_ENVELOPE_C_65 = 32;
	const PAPER_ENVELOPE_DL = 27;
	const PAPER_ENVELOPE_INVITE = 47;
	const PAPER_ENVELOPE_ITALY = 36;
	const PAPER_ENVELOPE_MONARCH = 37;
	const PAPER_ENVELOPE_PERSONAL = 38;
	const PAPER_EXECUTIVE = 7;
	const PAPER_FANFOLD_LEGAL_GERMAN = 41;
	const PAPER_FANFOLD_STD_GERMAN = 40;
	const PAPER_FANFOLD_US = 39;
	const PAPER_FOLIO = 14;
	const PAPER_ISOB_4 = 42;
	const PAPER_ISOB_5_EXTRA = 65;
	const PAPER_JAPANESE_DOUBLE_POSTCARD = 69;
	const PAPER_JAPANESE_DOUBLE_POSTCARD_ROTATED = 82;
	const PAPER_JAPANESE_ENVELOPE_CHOU_3 = 73;
	const PAPER_JAPANESE_ENVELOPE_CHOU_3_ROTATED = 86;
	const PAPER_JAPANESE_ENVELOPE_CHOU_4 = 74;
	const PAPER_JAPANESE_ENVELOPE_CHOU_4_ROTATED = 87;
	const PAPER_JAPANESE_ENVELOPE_KAKU_2 = 71;
	const PAPER_JAPANESE_ENVELOPE_KAKU_2_ROTATED = 84;
	const PAPER_JAPANESE_ENVELOPE_KAKU_3 = 72;
	const PAPER_JAPANESE_ENVELOPE_KAKU_3_ROTATED = 85;
	const PAPER_JAPANESE_ENVELOPE_YOU_4 = 91;
	const PAPER_JAPANESE_ENVELOPE_YOU_4_ROTATED = 92;
	const PAPER_JAPANESE_POSTCARD = 43;
	const PAPER_JAPANESE_POSTCARD_ROTATED = 81;
	const PAPER_JISB_4_ROTATED = 79;
	const PAPER_JISB_5_ROTATED = 80;
	const PAPER_JISB_5_TRANSVERSE = 62;
	const PAPER_JISB_6 = 88;
	const PAPER_JISB_6_ROTATED = 89;
	const PAPER_LEDGER = 4;
	const PAPER_LEGAL = 5;
	const PAPER_LEGAL_EXTRA = 51;
	const PAPER_LETTER = 1;
	const PAPER_LETTER_EXTRA = 50;
	const PAPER_LETTER_EXTRA_TRANSVERSE = 56;
	const PAPER_LETTER_PLUS = 59;
	const PAPER_LETTER_ROTATED = 75;
	const PAPER_LETTER_SMALL = 2;
	const PAPER_LETTER_TRANSVERSE = 54;
	const PAPER_NOTE = 18;
	const PAPER_PRC_16_K = 93;
	const PAPER_PRC_16_K_ROTATED = 106;
	const PAPER_PRC_32_K = 94;
	const PAPER_PRC_32_K_ROTATED = 107;
	const PAPER_PRC_BIG_32_K = 95;
	const PAPER_PRC_BIG_32_K_ROTATED = 108;
	const PAPER_PRC_ENVELOPE_1 = 96;
	const PAPER_PRC_ENVELOPE_10 = 105;
	const PAPER_PRC_ENVELOPE_10_ROTATED = 118;
	const PAPER_PRC_ENVELOPE_1_ROTATED = 109;
	const PAPER_PRC_ENVELOPE_2 = 97;
	const PAPER_PRC_ENVELOPE_2_ROTATED = 110;
	const PAPER_PRC_ENVELOPE_3 = 98;
	const PAPER_PRC_ENVELOPE_3_ROTATED = 111;
	const PAPER_PRC_ENVELOPE_4 = 99;
	const PAPER_PRC_ENVELOPE_4_ROTATED = 112;
	const PAPER_PRC_ENVELOPE_5 = 100;
	const PAPER_PRC_ENVELOPE_5_ROTATED = 113;
	const PAPER_PRC_ENVELOPE_6 = 101;
	const PAPER_PRC_ENVELOPE_6_ROTATED = 114;
	const PAPER_PRC_ENVELOPE_7 = 102;
	const PAPER_PRC_ENVELOPE_7_ROTATED = 115;
	const PAPER_PRC_ENVELOPE_8 = 103;
	const PAPER_PRC_ENVELOPE_8_ROTATED = 116;
	const PAPER_PRC_ENVELOPE_9 = 104;
	const PAPER_PRC_ENVELOPE_9_ROTATED = 117;
	const PAPER_QUARTO = 15;
	const PAPER_STATEMENT = 6;
	const PAPER_SUPER_A = 57;
	const PAPER_SUPER_B = 58;
	const PAPER_TABLOID = 3;
	const PAPER_TABLOID_EXTRA = 52;
	const PAPER_THERMAL = 302;
};

final class ParameterType {
	const ARRAY = 2;
	const REFERENCE = 0;
	const VALUE = 1;
};

final class PasteOperationType {
	const ADD = 1;
	const DIVIDE = 4;
	const MULTIPLY = 3;
	const NONE = 0;
	const SUBTRACT = 2;
};

final class PasteType {
	const ALL = 0;
	const ALL_EXCEPT_BORDERS = 2;
	const COLUMN_WIDTHS = 4;
	const COMMENTS = 6;
	const DEFAULT = 1;
	const DEFAULT_EXCEPT_BORDERS = 3;
	const FORMATS = 7;
	const FORMULAS = 8;
	const FORMULAS_AND_NUMBER_FORMATS = 9;
	const ROW_HEIGHTS = 5;
	const VALIDATION = 10;
	const VALUES = 11;
	const VALUES_AND_FORMATS = 12;
	const VALUES_AND_NUMBER_FORMATS = 13;
};

final class PdfCompliance {
	const NONE = 0;
	const PDF_14 = 0;
	const PDF_15 = 3;
	const PDF_16 = 4;
	const PDF_17 = 5;
	const PDF_A_1_A = 2;
	const PDF_A_1_B = 1;
	const PDF_A_2_A = 8;
	const PDF_A_2_B = 6;
	const PDF_A_2_U = 7;
	const PDF_A_3_A = 11;
	const PDF_A_3_B = 9;
	const PDF_A_3_U = 10;
};

final class PdfCompressionCore {
	const FLATE = 3;
	const LZW = 2;
	const NONE = 0;
	const RLE = 1;
};

final class PdfCustomPropertiesExport {
	const NONE = 0;
	const STANDARD = 1;
};

final class PdfFontEncoding {
	const ANSI_PREFER = 1;
	const IDENTITY = 0;
};

final class PdfOptimizationType {
	const MINIMUM_SIZE = 1;
	const STANDARD = 0;
};

final class PivotAreaType {
	const ALL = 3;
	const BUTTON = 5;
	const DATA = 2;
	const NONE = 0;
	const NORMAL = 1;
	const ORIGIN = 4;
	const TOP_RIGHT = 6;
};

final class PivotConditionFormatRuleType {
	const ALL = 1;
	const COLUMN = 3;
	const NONE = 0;
	const ROW = 2;
};

final class PivotConditionFormatScopeType {
	const DATA = 0;
	const FIELD = 1;
	const SELECTION = 2;
};

final class PivotFieldDataDisplayFormat {
	const DIFFERENCE_FROM = 1;
	const INDEX = 8;
	const NORMAL = 0;
	const PERCENTAGE_DIFFERENCE_FROM = 3;
	const PERCENTAGE_OF = 2;
	const PERCENTAGE_OF_COLUMN = 6;
	const PERCENTAGE_OF_PARENT_COLUMN_TOTAL = 10;
	const PERCENTAGE_OF_PARENT_ROW_TOTAL = 9;
	const PERCENTAGE_OF_PARENT_TOTAL = 11;
	const PERCENTAGE_OF_ROW = 5;
	const PERCENTAGE_OF_RUNNING_TOTAL_IN = 12;
	const PERCENTAGE_OF_TOTAL = 7;
	const RANK_LARGEST_TO_SMALLEST = 14;
	const RANK_SMALLEST_TO_LARGEST = 13;
	const RUNNING_TOTAL_IN = 4;
};

final class PivotFieldGroupType {
	const DATE_TIME_RANGE = 1;
	const DISCRETE = 3;
	const NONE = 0;
	const NUMBERIC_RANGE = 2;
};

final class PivotFieldSubtotalType {
	const AUTOMATIC = 1;
	const AVERAGE = 8;
	const COUNT = 4;
	const COUNT_NUMS = 128;
	const MAX = 16;
	const MIN = 32;
	const NONE = 0;
	const PRODUCT = 64;
	const STDEV = 256;
	const STDEVP = 512;
	const SUM = 2;
	const VAR = 1024;
	const VARP = 2048;
};

final class PivotFieldType {
	const COLUMN = 2;
	const DATA = 8;
	const PAGE = 4;
	const ROW = 1;
	const UNDEFINED = 0;
};

final class PivotFilterType {
	const APRIL = 30;
	const AUGUST = 34;
	const CAPTION_BEGINS_WITH = 0;
	const CAPTION_BETWEEN = 1;
	const CAPTION_CONTAINS = 2;
	const CAPTION_ENDS_WITH = 3;
	const CAPTION_EQUAL = 4;
	const CAPTION_GREATER_THAN = 5;
	const CAPTION_GREATER_THAN_OR_EQUAL = 6;
	const CAPTION_LESS_THAN = 7;
	const CAPTION_LESS_THAN_OR_EQUAL = 8;
	const CAPTION_NOT_BEGINS_WITH = 9;
	const CAPTION_NOT_BETWEEN = 10;
	const CAPTION_NOT_CONTAINS = 11;
	const CAPTION_NOT_ENDS_WITH = 12;
	const CAPTION_NOT_EQUAL = 13;
	const COUNT = 14;
	const DATE_AFTER = 17;
	const DATE_AFTER_OR_EQUAL = 18;
	const DATE_BEFORE = 21;
	const DATE_BEFORE_OR_EQUAL = 22;
	const DATE_BETWEEN = 15;
	const DATE_EQUAL = 16;
	const DATE_NEWER_THAN = 17;
	const DATE_NEWER_THAN_OR_EQUAL = 18;
	const DATE_NOT_BETWEEN = 19;
	const DATE_NOT_EQUAL = 20;
	const DATE_OLDER_THAN = 21;
	const DATE_OLDER_THAN_OR_EQUAL = 22;
	const DECEMBER = 38;
	const FEBRUARY = 28;
	const JANUARY = 27;
	const JULY = 33;
	const JUNE = 32;
	const LAST_MONTH = 23;
	const LAST_QUARTER = 24;
	const LAST_WEEK = 25;
	const LAST_YEAR = 26;
	const M_1 = 27;
	const M_10 = 36;
	const M_11 = 37;
	const M_12 = 38;
	const M_2 = 28;
	const M_3 = 29;
	const M_4 = 30;
	const M_5 = 31;
	const M_6 = 32;
	const M_7 = 33;
	const M_8 = 34;
	const M_9 = 35;
	const MARCH = 29;
	const MAY = 31;
	const NEXT_MONTH = 39;
	const NEXT_QUARTER = 40;
	const NEXT_WEEK = 41;
	const NEXT_YEAR = 42;
	const NONE = 255;
	const NOVEMBER = 37;
	const OCTOBER = 36;
	const PERCENT = 43;
	const Q_1 = 44;
	const Q_2 = 45;
	const Q_3 = 46;
	const Q_4 = 47;
	const QUARTER_1 = 44;
	const QUARTER_2 = 45;
	const QUARTER_3 = 46;
	const QUARTER_4 = 47;
	const SEPTEMBER = 35;
	const SUM = 48;
	const THIS_MONTH = 49;
	const THIS_QUARTER = 50;
	const THIS_WEEK = 51;
	const THIS_YEAR = 52;
	const TODAY = 53;
	const TOMORROW = 54;
	const UNKNOWN = 55;
	const VALUE_BETWEEN = 56;
	const VALUE_EQUAL = 57;
	const VALUE_GREATER_THAN = 58;
	const VALUE_GREATER_THAN_OR_EQUAL = 59;
	const VALUE_LESS_THAN = 60;
	const VALUE_LESS_THAN_OR_EQUAL = 61;
	const VALUE_NOT_BETWEEN = 62;
	const VALUE_NOT_EQUAL = 63;
	const YEAR_TO_DATE = 64;
	const YESTERDAY = 65;
};

final class PivotGroupByType {
	const DAYS = 4;
	const HOURS = 3;
	const MINUTES = 2;
	const MONTHS = 5;
	const NUMBERS = 0;
	const QUARTERS = 6;
	const RANGE_OF_VALUES = 0;
	const SECONDS = 1;
	const YEARS = 7;
};

final class PivotItemPosition {
	const CUSTOM = 2;
	const NEXT = 1;
	const PREVIOUS = 0;
};

final class PivotItemPositionType {
	const CUSTOM = 2;
	const NEXT = 1;
	const PREVIOUS = 0;
};

final class PivotLineType {
	const BLANK = 3;
	const GRAND_TOTAL = 2;
	const REGULAR = 0;
	const SUBTOTAL = 1;
};

final class PivotMissingItemLimitType {
	const AUTOMATIC = 0;
	const MAX = 1;
	const NONE = 2;
};

final class PivotRefreshState {
	const SUCCESS = 0;
	const UNSUPPORTED_EXTERNAL_DATA_SOURCE = 1;
};

final class PivotTableAutoFormatType {
	const CLASSIC = 1;
	const NONE = 0;
	const REPORT_1 = 2;
	const REPORT_10 = 11;
	const REPORT_2 = 3;
	const REPORT_3 = 4;
	const REPORT_4 = 5;
	const REPORT_5 = 6;
	const REPORT_6 = 7;
	const REPORT_7 = 8;
	const REPORT_8 = 9;
	const REPORT_9 = 10;
	const TABLE_1 = 12;
	const TABLE_10 = 21;
	const TABLE_2 = 13;
	const TABLE_3 = 14;
	const TABLE_4 = 15;
	const TABLE_5 = 16;
	const TABLE_6 = 17;
	const TABLE_7 = 18;
	const TABLE_8 = 19;
	const TABLE_9 = 20;
};

final class PivotTableSelectionType {
	const DATA_AND_LABEL = 0;
	const DATA_ONLY = 2;
	const LABEL_ONLY = 1;
};

final class PivotTableSourceType {
	const CONSOLIDATION = 4;
	const EXTERNAL = 2;
	const SCENARIO = 8;
	const SHEET = 1;
	const UNKNOWN = 9;
};

final class PivotTableStyleType {
	const CUSTOM = 85;
	const NONE = 0;
	const PIVOT_TABLE_STYLE_DARK_1 = 57;
	const PIVOT_TABLE_STYLE_DARK_10 = 66;
	const PIVOT_TABLE_STYLE_DARK_11 = 67;
	const PIVOT_TABLE_STYLE_DARK_12 = 68;
	const PIVOT_TABLE_STYLE_DARK_13 = 69;
	const PIVOT_TABLE_STYLE_DARK_14 = 70;
	const PIVOT_TABLE_STYLE_DARK_15 = 71;
	const PIVOT_TABLE_STYLE_DARK_16 = 72;
	const PIVOT_TABLE_STYLE_DARK_17 = 73;
	const PIVOT_TABLE_STYLE_DARK_18 = 74;
	const PIVOT_TABLE_STYLE_DARK_19 = 75;
	const PIVOT_TABLE_STYLE_DARK_2 = 58;
	const PIVOT_TABLE_STYLE_DARK_20 = 76;
	const PIVOT_TABLE_STYLE_DARK_21 = 77;
	const PIVOT_TABLE_STYLE_DARK_22 = 78;
	const PIVOT_TABLE_STYLE_DARK_23 = 79;
	const PIVOT_TABLE_STYLE_DARK_24 = 80;
	const PIVOT_TABLE_STYLE_DARK_25 = 81;
	const PIVOT_TABLE_STYLE_DARK_26 = 82;
	const PIVOT_TABLE_STYLE_DARK_27 = 83;
	const PIVOT_TABLE_STYLE_DARK_28 = 84;
	const PIVOT_TABLE_STYLE_DARK_3 = 59;
	const PIVOT_TABLE_STYLE_DARK_4 = 60;
	const PIVOT_TABLE_STYLE_DARK_5 = 61;
	const PIVOT_TABLE_STYLE_DARK_6 = 62;
	const PIVOT_TABLE_STYLE_DARK_7 = 63;
	const PIVOT_TABLE_STYLE_DARK_8 = 64;
	const PIVOT_TABLE_STYLE_DARK_9 = 65;
	const PIVOT_TABLE_STYLE_LIGHT_1 = 1;
	const PIVOT_TABLE_STYLE_LIGHT_10 = 10;
	const PIVOT_TABLE_STYLE_LIGHT_11 = 11;
	const PIVOT_TABLE_STYLE_LIGHT_12 = 12;
	const PIVOT_TABLE_STYLE_LIGHT_13 = 13;
	const PIVOT_TABLE_STYLE_LIGHT_14 = 14;
	const PIVOT_TABLE_STYLE_LIGHT_15 = 15;
	const PIVOT_TABLE_STYLE_LIGHT_16 = 16;
	const PIVOT_TABLE_STYLE_LIGHT_17 = 17;
	const PIVOT_TABLE_STYLE_LIGHT_18 = 18;
	const PIVOT_TABLE_STYLE_LIGHT_19 = 19;
	const PIVOT_TABLE_STYLE_LIGHT_2 = 2;
	const PIVOT_TABLE_STYLE_LIGHT_20 = 20;
	const PIVOT_TABLE_STYLE_LIGHT_21 = 21;
	const PIVOT_TABLE_STYLE_LIGHT_22 = 22;
	const PIVOT_TABLE_STYLE_LIGHT_23 = 23;
	const PIVOT_TABLE_STYLE_LIGHT_24 = 24;
	const PIVOT_TABLE_STYLE_LIGHT_25 = 25;
	const PIVOT_TABLE_STYLE_LIGHT_26 = 26;
	const PIVOT_TABLE_STYLE_LIGHT_27 = 27;
	const PIVOT_TABLE_STYLE_LIGHT_28 = 28;
	const PIVOT_TABLE_STYLE_LIGHT_3 = 3;
	const PIVOT_TABLE_STYLE_LIGHT_4 = 4;
	const PIVOT_TABLE_STYLE_LIGHT_5 = 5;
	const PIVOT_TABLE_STYLE_LIGHT_6 = 6;
	const PIVOT_TABLE_STYLE_LIGHT_7 = 7;
	const PIVOT_TABLE_STYLE_LIGHT_8 = 8;
	const PIVOT_TABLE_STYLE_LIGHT_9 = 9;
	const PIVOT_TABLE_STYLE_MEDIUM_1 = 29;
	const PIVOT_TABLE_STYLE_MEDIUM_10 = 38;
	const PIVOT_TABLE_STYLE_MEDIUM_11 = 39;
	const PIVOT_TABLE_STYLE_MEDIUM_12 = 40;
	const PIVOT_TABLE_STYLE_MEDIUM_13 = 41;
	const PIVOT_TABLE_STYLE_MEDIUM_14 = 42;
	const PIVOT_TABLE_STYLE_MEDIUM_15 = 43;
	const PIVOT_TABLE_STYLE_MEDIUM_16 = 44;
	const PIVOT_TABLE_STYLE_MEDIUM_17 = 45;
	const PIVOT_TABLE_STYLE_MEDIUM_18 = 46;
	const PIVOT_TABLE_STYLE_MEDIUM_19 = 47;
	const PIVOT_TABLE_STYLE_MEDIUM_2 = 30;
	const PIVOT_TABLE_STYLE_MEDIUM_20 = 48;
	const PIVOT_TABLE_STYLE_MEDIUM_21 = 49;
	const PIVOT_TABLE_STYLE_MEDIUM_22 = 50;
	const PIVOT_TABLE_STYLE_MEDIUM_23 = 51;
	const PIVOT_TABLE_STYLE_MEDIUM_24 = 52;
	const PIVOT_TABLE_STYLE_MEDIUM_25 = 53;
	const PIVOT_TABLE_STYLE_MEDIUM_26 = 54;
	const PIVOT_TABLE_STYLE_MEDIUM_27 = 55;
	const PIVOT_TABLE_STYLE_MEDIUM_28 = 56;
	const PIVOT_TABLE_STYLE_MEDIUM_3 = 31;
	const PIVOT_TABLE_STYLE_MEDIUM_4 = 32;
	const PIVOT_TABLE_STYLE_MEDIUM_5 = 33;
	const PIVOT_TABLE_STYLE_MEDIUM_6 = 34;
	const PIVOT_TABLE_STYLE_MEDIUM_7 = 35;
	const PIVOT_TABLE_STYLE_MEDIUM_8 = 36;
	const PIVOT_TABLE_STYLE_MEDIUM_9 = 37;
};

final class PlacementType {
	const FREE_FLOATING = 0;
	const MOVE = 1;
	const MOVE_AND_SIZE = 2;
};

final class PlotDataByType {
	const COLUMN = 1;
	const ROW = 0;
};

final class PlotEmptyCellsType {
	const INTERPOLATED = 2;
	const NOT_PLOTTED = 0;
	const ZERO = 1;
};

final class PowerQueryFormulaType {
	const FORMULA = 0;
	const FUNCTION = 1;
	const PARAMETER = 2;
};

final class PresetCameraType {
	const ISOMETRIC_BOTTOM_DOWN = 0;
	const ISOMETRIC_BOTTOM_UP = 1;
	const ISOMETRIC_LEFT_DOWN = 2;
	const ISOMETRIC_LEFT_UP = 3;
	const ISOMETRIC_OFF_AXIS_1_LEFT = 4;
	const ISOMETRIC_OFF_AXIS_1_RIGHT = 5;
	const ISOMETRIC_OFF_AXIS_1_TOP = 6;
	const ISOMETRIC_OFF_AXIS_2_LEFT = 7;
	const ISOMETRIC_OFF_AXIS_2_RIGHT = 8;
	const ISOMETRIC_OFF_AXIS_2_TOP = 9;
	const ISOMETRIC_OFF_AXIS_3_BOTTOM = 10;
	const ISOMETRIC_OFF_AXIS_3_LEFT = 11;
	const ISOMETRIC_OFF_AXIS_3_RIGHT = 12;
	const ISOMETRIC_OFF_AXIS_4_BOTTOM = 13;
	const ISOMETRIC_OFF_AXIS_4_LEFT = 14;
	const ISOMETRIC_OFF_AXIS_4_RIGHT = 15;
	const ISOMETRIC_RIGHT_DOWN = 16;
	const ISOMETRIC_RIGHT_UP = 17;
	const ISOMETRIC_TOP_DOWN = 18;
	const ISOMETRIC_TOP_UP = 19;
	const LEGACY_OBLIQUE_BOTTOM = 20;
	const LEGACY_OBLIQUE_BOTTOM_LEFT = 21;
	const LEGACY_OBLIQUE_BOTTOM_RIGHT = 22;
	const LEGACY_OBLIQUE_FRONT = 23;
	const LEGACY_OBLIQUE_LEFT = 24;
	const LEGACY_OBLIQUE_RIGHT = 25;
	const LEGACY_OBLIQUE_TOP = 26;
	const LEGACY_OBLIQUE_TOP_LEFT = 27;
	const LEGACY_OBLIQUE_TOP_RIGHT = 28;
	const LEGACY_PERSPECTIVE_BOTTOM = 29;
	const LEGACY_PERSPECTIVE_BOTTOM_LEFT = 30;
	const LEGACY_PERSPECTIVE_BOTTOM_RIGHT = 31;
	const LEGACY_PERSPECTIVE_FRONT = 32;
	const LEGACY_PERSPECTIVE_LEFT = 33;
	const LEGACY_PERSPECTIVE_RIGHT = 34;
	const LEGACY_PERSPECTIVE_TOP = 35;
	const LEGACY_PERSPECTIVE_TOP_LEFT = 36;
	const LEGACY_PERSPECTIVE_TOP_RIGHT = 37;
	const OBLIQUE_BOTTOM = 38;
	const OBLIQUE_BOTTOM_LEFT = 39;
	const OBLIQUE_BOTTOM_RIGHT = 40;
	const OBLIQUE_LEFT = 41;
	const OBLIQUE_RIGHT = 42;
	const OBLIQUE_TOP = 43;
	const OBLIQUE_TOP_LEFT = 44;
	const OBLIQUE_TOP_RIGHT = 45;
	const ORTHOGRAPHIC_FRONT = 46;
	const PERSPECTIVE_ABOVE = 47;
	const PERSPECTIVE_ABOVE_LEFT_FACING = 48;
	const PERSPECTIVE_ABOVE_RIGHT_FACING = 49;
	const PERSPECTIVE_BELOW = 50;
	const PERSPECTIVE_CONTRASTING_LEFT_FACING = 51;
	const PERSPECTIVE_CONTRASTING_RIGHT_FACING = 52;
	const PERSPECTIVE_FRONT = 53;
	const PERSPECTIVE_HEROIC_EXTREME_LEFT_FACING = 54;
	const PERSPECTIVE_HEROIC_EXTREME_RIGHT_FACING = 55;
	const PERSPECTIVE_HEROIC_LEFT_FACING = 56;
	const PERSPECTIVE_HEROIC_RIGHT_FACING = 57;
	const PERSPECTIVE_LEFT = 58;
	const PERSPECTIVE_RELAXED = 59;
	const PERSPECTIVE_RELAXED_MODERATELY = 60;
	const PERSPECTIVE_RIGHT = 61;
};

final class PresetMaterialType {
	const CLEAR = 0;
	const DARK_EDGE = 1;
	const FLAT = 2;
	const LEGACY_MATTE = 3;
	const LEGACY_METAL = 4;
	const LEGACY_PLASTIC = 5;
	const LEGACY_WIREFRAME = 6;
	const MATTE = 7;
	const METAL = 8;
	const PLASTIC = 9;
	const POWDER = 10;
	const SOFT_EDGE = 11;
	const SOFT_METAL = 12;
	const TRANSLUCENT_POWDER = 13;
	const WARM_MATTE = 14;
};

final class PresetShadowType {
	const BELOW = 22;
	const CUSTOM = 1;
	const INSIDE_BOTTOM = 18;
	const INSIDE_CENTER = 15;
	const INSIDE_DIAGONAL_BOTTOM_LEFT = 17;
	const INSIDE_DIAGONAL_BOTTOM_RIGHT = 19;
	const INSIDE_DIAGONAL_TOP_LEFT = 11;
	const INSIDE_DIAGONAL_TOP_RIGHT = 13;
	const INSIDE_LEFT = 14;
	const INSIDE_RIGHT = 16;
	const INSIDE_TOP = 12;
	const NO_SHADOW = 0;
	const OFFSET_BOTTOM = 3;
	const OFFSET_CENTER = 6;
	const OFFSET_DIAGONAL_BOTTOM_LEFT = 4;
	const OFFSET_DIAGONAL_BOTTOM_RIGHT = 2;
	const OFFSET_DIAGONAL_TOP_LEFT = 10;
	const OFFSET_DIAGONAL_TOP_RIGHT = 8;
	const OFFSET_LEFT = 7;
	const OFFSET_RIGHT = 5;
	const OFFSET_TOP = 9;
	const PERSPECTIVE_DIAGONAL_LOWER_LEFT = 23;
	const PERSPECTIVE_DIAGONAL_LOWER_RIGHT = 24;
	const PERSPECTIVE_DIAGONAL_UPPER_LEFT = 20;
	const PERSPECTIVE_DIAGONAL_UPPER_RIGHT = 21;
};

final class PresetThemeGradientType {
	const BOTTOM_SPOTLIGHT = 3;
	const LIGHT_GRADIENT = 0;
	const MEDIUM_GRADIENT = 2;
	const RADIAL_GRADIENT = 4;
	const TOP_SPOTLIGHT = 1;
};

final class PresetWordArtStyle {
	const WORD_ART_STYLE_1 = 1;
	const WORD_ART_STYLE_10 = 10;
	const WORD_ART_STYLE_11 = 11;
	const WORD_ART_STYLE_12 = 12;
	const WORD_ART_STYLE_13 = 13;
	const WORD_ART_STYLE_14 = 14;
	const WORD_ART_STYLE_15 = 15;
	const WORD_ART_STYLE_16 = 16;
	const WORD_ART_STYLE_17 = 17;
	const WORD_ART_STYLE_18 = 18;
	const WORD_ART_STYLE_19 = 19;
	const WORD_ART_STYLE_2 = 2;
	const WORD_ART_STYLE_20 = 20;
	const WORD_ART_STYLE_3 = 3;
	const WORD_ART_STYLE_4 = 4;
	const WORD_ART_STYLE_5 = 5;
	const WORD_ART_STYLE_6 = 6;
	const WORD_ART_STYLE_7 = 7;
	const WORD_ART_STYLE_8 = 8;
	const WORD_ART_STYLE_9 = 9;
};

final class PrintCommentsType {
	const PRINT_IN_PLACE = 0;
	const PRINT_NO_COMMENTS = 1;
	const PRINT_SHEET_END = 2;
	const PRINT_WITH_THREADED_COMMENTS = 3;
};

final class PrintErrorsType {
	const PRINT_ERRORS_BLANK = 0;
	const PRINT_ERRORS_DASH = 1;
	const PRINT_ERRORS_DISPLAYED = 2;
	const PRINT_ERRORS_NA = 3;
};

final class PrintingPageType {
	const DEFAULT = 0;
	const IGNORE_BLANK = 1;
	const IGNORE_STYLE = 2;
};

final class PrintOrderType {
	const DOWN_THEN_OVER = 0;
	const OVER_THEN_DOWN = 1;
};

final class PrintSizeType {
	const CUSTOM = 2;
	const FIT = 1;
	const FULL = 0;
};

final class PropertyType {
	const BLOB = 5;
	const BOOLEAN = 0;
	const DATE_TIME = 1;
	const DOUBLE = 2;
	const NUMBER = 3;
	const STRING = 4;
};

final class ProtectionType {
	const ALL = 0;
	const CONTENTS = 1;
	const NONE = 6;
	const OBJECTS = 2;
	const SCENARIOS = 3;
	const STRUCTURE = 4;
	const WINDOWS = 5;
};

final class QuartileCalculationType {
	const EXCLUSIVE = 0;
	const INCLUSIVE = 1;
};

final class ReConnectionMethodType {
	const ALWAYS = 2;
	const NEVER = 3;
	const REQUIRED = 1;
};

final class RectangleAlignmentType {
	const BOTTOM = 0;
	const BOTTOM_LEFT = 1;
	const BOTTOM_RIGHT = 2;
	const CENTER = 3;
	const LEFT = 4;
	const RIGHT = 5;
	const TOP = 6;
	const TOP_LEFT = 7;
	const TOP_RIGHT = 8;
};

final class ReflectionEffectType {
	const CUSTOM = 1;
	const FULL_REFLECTION_4_PT_OFFSET = 7;
	const FULL_REFLECTION_8_PT_OFFSET = 10;
	const FULL_REFLECTION_TOUCHING = 4;
	const HALF_REFLECTION_4_PT_OFFSET = 6;
	const HALF_REFLECTION_8_PT_OFFSET = 9;
	const HALF_REFLECTION_TOUCHING = 3;
	const NONE = 0;
	const TIGHT_REFLECTION_4_PT_OFFSET = 5;
	const TIGHT_REFLECTION_8_PT_OFFSET = 8;
	const TIGHT_REFLECTION_TOUCHING = 2;
};

final class RenameStrategy {
	const DIGIT = 1;
	const EXCEPTION = 0;
	const LETTER = 2;
};

final class ReserveMissingPivotItemType {
	const ALL = 1;
	const DEFAULT = 0;
	const NONE = 2;
};

final class ResourceLoadingType {
	const DEFAULT = 0;
	const SKIP = 1;
	const USER_PROVIDED = 2;
};

final class RevisionActionType {
	const ADD = 0;
	const DELETE = 1;
	const DELETE_COLUMN = 2;
	const DELETE_ROW = 3;
	const INSERT_COLUMN = 4;
	const INSERT_ROW = 5;
};

final class RevisionType {
	const AUTO_FORMAT = 3;
	const CHANGE_CELLS = 2;
	const COMMENT = 5;
	const CUSTOM_VIEW = 0;
	const DEFINED_NAME = 1;
	const FORMAT = 6;
	const INSERT_DELETE = 11;
	const INSERT_SHEET = 7;
	const MERGE_CONFLICT = 4;
	const MOVE_CELLS = 8;
	const QUERY_TABLE = 10;
	const RENAME_SHEET = 12;
	const UNDO = 9;
	const UNKNOWN = 13;
};

final class SaveFormat {
	const AUTO = 0;
	const AZW_3 = 773;
	const BMP = 263;
	const CSV = 1;
	const DBF = 515;
	const DIF = 30;
	const DOCX = 62;
	const EMF = 258;
	const EPUB = 772;
	const EXCEL_97_TO_2003 = 5;
	const FODS = 59;
	const GIF = 322;
	const HTML = 12;
	const JPG = 261;
	const JSON = 513;
	const M_HTML = 17;
	const MARKDOWN = 57;
	const NUMBERS = 56;
	const ODS = 14;
	const OTS = 31;
	const PCL = 1025;
	const PDF = 13;
	const PNG = 262;
	const PPTX = 61;
	const SPREADSHEET_ML = 15;
	const SQL_SCRIPT = 514;
	const SVG = 28;
	const SXC = 60;
	const TAB_DELIMITED = 11;
	const TIFF = 21;
	const TSV = 11;
	const UNKNOWN = 255;
	const X_HTML = 771;
	const XLAM = 10;
	const XLSB = 16;
	const XLSM = 7;
	const XLSX = 6;
	const XLT = 32;
	const XLTM = 9;
	const XLTX = 8;
	const XML = 51;
	const XPS = 20;
};

final class SelectionType {
	const EXTEND = 2;
	const MULTI = 1;
	const SINGLE = 0;
};

final class SensitivityLabelAssignmentType {
	const PRIVILEGED = 1;
	const STANDARD = 0;
};

final class SensitivityLabelMarkType {
	const ENCRYPTION = 8;
	const FOOTER = 2;
	const HEADER = 1;
	const NONE = 0;
	const WATERMARK = 4;
};

final class ShapeAnchorType {
	const ONE_CELL_ANCHOR = 1;
	const TWO_CELL_ANCHOR = 0;
};

final class ShapeLockType {
	const ADJUST_HANDLES = 1;
	const ARROWHEAD = 12;
	const ASPECT_RATIO = 7;
	const CROP = 4;
	const GROUP = 0;
	const MOVE = 6;
	const POINTS = 3;
	const RESIZE = 10;
	const ROTATION = 8;
	const SELECTION = 5;
	const SHAPE_TYPE = 11;
	const TEXT = 2;
	const UNGROUP = 9;
};

final class ShapePathType {
	const ARC_TO = 6;
	const CLOSE = 3;
	const CUBIC_BEZIER_CURVE_TO = 1;
	const END = 4;
	const ESCAPE = 5;
	const LINE_TO = 0;
	const MOVE_TO = 2;
	const UNKNOWN = 7;
};

final class ShapeTextVerticalAlignmentType {
	const BOTTOM = 2;
	const BOTTOM_CENTERED = 5;
	const CENTER = 7;
	const CENTER_MIDDLE = 10;
	const LEFT = 6;
	const LEFT_MIDDLE = 9;
	const MIDDLE = 1;
	const MIDDLE_CENTERED = 4;
	const RIGHT = 8;
	const RIGHT_MIDDLE = 11;
	const TOP = 0;
	const TOP_CENTERED = 3;
};

final class SheetType {
	const BIFF_4_MACRO = 3;
	const CHART = 2;
	const DIALOG = 6;
	const INTERNATIONAL_MACRO = 4;
	const OTHER = 5;
	const VB = 0;
	const WORKSHEET = 1;
};

final class ShiftType {
	const DOWN = 0;
	const LEFT = 1;
	const NONE = 2;
	const RIGHT = 3;
	const UP = 4;
};

final class ShowDropButtonType {
	const ALWAYS = 2;
	const FOCUS = 1;
	const NEVER = 0;
};

final class SignatureType {
	const CUSTOM = 3;
	const DEFAULT = 0;
	const STAMP = 1;
};

final class SlicerCacheCrossFilterType {
	const NONE = 0;
	const SHOW_ITEMS_WITH_DATA_AT_TOP = 1;
	const SHOW_ITEMS_WITH_NO_DATA = 2;
};

final class SlicerCacheItemSortType {
	const ASCENDING = 1;
	const DESCENDING = 2;
	const NATURAL = 0;
};

final class SlicerStyleType {
	const CUSTOM = 14;
	const SLICER_STYLE_DARK_1 = 8;
	const SLICER_STYLE_DARK_2 = 9;
	const SLICER_STYLE_DARK_3 = 10;
	const SLICER_STYLE_DARK_4 = 11;
	const SLICER_STYLE_DARK_5 = 12;
	const SLICER_STYLE_DARK_6 = 13;
	const SLICER_STYLE_LIGHT_1 = 0;
	const SLICER_STYLE_LIGHT_2 = 1;
	const SLICER_STYLE_LIGHT_3 = 2;
	const SLICER_STYLE_LIGHT_4 = 3;
	const SLICER_STYLE_LIGHT_5 = 4;
	const SLICER_STYLE_LIGHT_6 = 5;
	const SLICER_STYLE_OTHER_1 = 6;
	const SLICER_STYLE_OTHER_2 = 7;
};

final class SlideViewType {
	const PRINT = 1;
	const VIEW = 0;
};

final class SmartTagShowType {
	const ALL = 0;
	const NO_SMART_TAG_INDICATOR = 1;
	const NONE = 2;
};

final class SortOnType {
	const CELL_COLOR = 1;
	const FONT_COLOR = 2;
	const ICON = 3;
	const VALUE = 0;
};

final class SortOrder {
	const ASCENDING = 0;
	const DESCENDING = 1;
	const NATURAL = 2;
};

final class SparklineAxisMinMaxType {
	const AUTO_INDIVIDUAL = 0;
	const CUSTOM = 2;
	const GROUP = 1;
};

final class SparklinePresetStyleType {
	const CUSTOM = 36;
	const STYLE_1 = 0;
	const STYLE_10 = 9;
	const STYLE_11 = 10;
	const STYLE_12 = 11;
	const STYLE_13 = 12;
	const STYLE_14 = 13;
	const STYLE_15 = 14;
	const STYLE_16 = 15;
	const STYLE_17 = 16;
	const STYLE_18 = 17;
	const STYLE_19 = 18;
	const STYLE_2 = 1;
	const STYLE_20 = 19;
	const STYLE_21 = 20;
	const STYLE_22 = 21;
	const STYLE_23 = 22;
	const STYLE_24 = 23;
	const STYLE_25 = 24;
	const STYLE_26 = 25;
	const STYLE_27 = 26;
	const STYLE_28 = 27;
	const STYLE_29 = 28;
	const STYLE_3 = 2;
	const STYLE_30 = 29;
	const STYLE_31 = 30;
	const STYLE_32 = 31;
	const STYLE_33 = 32;
	const STYLE_34 = 33;
	const STYLE_35 = 34;
	const STYLE_36 = 35;
	const STYLE_4 = 3;
	const STYLE_5 = 4;
	const STYLE_6 = 5;
	const STYLE_7 = 6;
	const STYLE_8 = 7;
	const STYLE_9 = 8;
};

final class SparklineType {
	const COLUMN = 1;
	const LINE = 0;
	const STACKED = 2;
};

final class SqlDataType {
	const SQL_BIG_INT = -5;
	const SQL_BINARY = -2;
	const SQL_BIT = -7;
	const SQL_CHAR = 1;
	const SQL_DECIMAL = 3;
	const SQL_DOUBLE = 8;
	const SQL_FLOAT = 6;
	const SQL_GUID = -11;
	const SQL_INTEGER = 4;
	const SQL_INTERVAL_DAY = 103;
	const SQL_INTERVAL_DAY_TO_HOUR = 108;
	const SQL_INTERVAL_DAY_TO_MINUTE = 109;
	const SQL_INTERVAL_DAY_TO_SECOND = 110;
	const SQL_INTERVAL_HOUR = 104;
	const SQL_INTERVAL_HOUR_TO_MINUTE = 111;
	const SQL_INTERVAL_HOUR_TO_SECOND = 112;
	const SQL_INTERVAL_MINUTE = 105;
	const SQL_INTERVAL_MINUTE_TO_SECOND = 113;
	const SQL_INTERVAL_MONTH = 102;
	const SQL_INTERVAL_SECOND = 106;
	const SQL_INTERVAL_YEAR = 101;
	const SQL_INTERVAL_YEAR_TO_MONTH = 107;
	const SQL_LONG_VAR_BINARY = -4;
	const SQL_LONG_VAR_CHAR = -1;
	const SQL_NUMERIC = 2;
	const SQL_REAL = 7;
	const SQL_SIGNED_OFFSET = -20;
	const SQL_SMALL_INT = 5;
	const SQL_TINY_INT = -6;
	const SQL_TYPE_DATE = 9;
	const SQL_TYPE_TIME = 10;
	const SQL_TYPE_TIMESTAMP = 11;
	const SQL_UNKNOWN_TYPE = 0;
	const SQL_UNSIGNED_OFFSET = -22;
	const SQL_VAR_BINARY = -3;
	const SQL_VAR_CHAR = 12;
	const SQL_W_CHAR = -8;
	const SQL_W_LONG_VARCHAR = -10;
	const SQL_W_VARCHAR = -9;
};

final class SqlScriptOperatorType {
	const DELETE = 2;
	const INSERT = 0;
	const UPDATE = 1;
};

final class StyleModifyFlag {
	const ALIGNMENT_SETTINGS = 4161664;
	const ALL = 234881023;
	const BACKGROUND_COLOR = 16777216;
	const BORDERS = 16224;
	const BOTTOM_BORDER = 2048;
	const CELL_SHADING = 29360128;
	const DIAGONAL = 12288;
	const DIAGONAL_DOWN_BORDER = 4096;
	const DIAGONAL_UP_BORDER = 8192;
	const DYNAMIC_STYLE_BORDERS = 96;
	const FONT = 31;
	const FONT_CAP = 18;
	const FONT_CHARSET = 10;
	const FONT_COLOR = 3;
	const FONT_DIRTY = 12;
	const FONT_EQUALIZE = 17;
	const FONT_FAMILY = 9;
	const FONT_ITALIC = 5;
	const FONT_KERNING = 16;
	const FONT_NAME = 2;
	const FONT_SCHEME = 11;
	const FONT_SCRIPT = 8;
	const FONT_SIZE = 1;
	const FONT_SPACING = 15;
	const FONT_SPELLING_ERROR = 13;
	const FONT_STRIKE = 7;
	const FONT_U_FILL_TX = 14;
	const FONT_UNDERLINE = 6;
	const FONT_VERTICAL_TEXT = 19;
	const FONT_WEIGHT = 4;
	const FOREGROUND_COLOR = 8388608;
	const HIDE_FORMULA = 134217728;
	const HORIZONTAL_ALIGNMENT = 32768;
	const HORIZONTAL_BORDER = 32;
	const INDENT = 131072;
	const LEFT_BORDER = 256;
	const LOCKED = 67108864;
	const NONE = 0;
	const NUMBER_FORMAT = 16384;
	const PATTERN = 4194304;
	const PROTECTION_SETTINGS = 201326592;
	const RELATIVE_INDENT = 128;
	const RIGHT_BORDER = 512;
	const ROTATION = 262144;
	const SHRINK_TO_FIT = 1048576;
	const SIDE_BORDERS = 3840;
	const TEXT_DIRECTION = 2097152;
	const TOP_BORDER = 1024;
	const VERTICAL_ALIGNMENT = 65536;
	const VERTICAL_BORDER = 64;
	const WRAP_TEXT = 524288;
};

final class SvgEmbeddedFontType {
	const NONE = 0;
	const WOFF = 1;
};

final class TableDataSourceType {
	const QUERY_TABLE = 3;
	const SHARE_POINT = 1;
	const WORKSHEET = 0;
	const XML = 2;
};

final class TableStyleElementType {
	const BLANK_ROW = 18;
	const FIRST_COLUMN = 8;
	const FIRST_COLUMN_STRIPE = 3;
	const FIRST_COLUMN_SUBHEADING = 22;
	const FIRST_HEADER_CELL = 11;
	const FIRST_ROW_STRIPE = 5;
	const FIRST_ROW_SUBHEADING = 25;
	const FIRST_SUBTOTAL_COLUMN = 15;
	const FIRST_SUBTOTAL_ROW = 19;
	const FIRST_TOTAL_CELL = 13;
	const GRAND_TOTAL_COLUMN = 28;
	const GRAND_TOTAL_ROW = 29;
	const HEADER_ROW = 9;
	const LAST_COLUMN = 7;
	const LAST_HEADER_CELL = 12;
	const LAST_TOTAL_CELL = 14;
	const PAGE_FIELD_LABELS = 1;
	const PAGE_FIELD_VALUES = 2;
	const SECOND_COLUMN_STRIPE = 4;
	const SECOND_COLUMN_SUBHEADING = 23;
	const SECOND_ROW_STRIPE = 6;
	const SECOND_ROW_SUBHEADING = 26;
	const SECOND_SUBTOTAL_COLUMN = 16;
	const SECOND_SUBTOTAL_ROW = 20;
	const THIRD_COLUMN_SUBHEADING = 24;
	const THIRD_ROW_SUBHEADING = 27;
	const THIRD_SUBTOTAL_COLUMN = 17;
	const THIRD_SUBTOTAL_ROW = 21;
	const TOTAL_ROW = 10;
	const WHOLE_TABLE = 0;
};

final class TableStyleType {
	const CUSTOM = 61;
	const NONE = 0;
	const TABLE_STYLE_DARK_1 = 50;
	const TABLE_STYLE_DARK_10 = 59;
	const TABLE_STYLE_DARK_11 = 60;
	const TABLE_STYLE_DARK_2 = 51;
	const TABLE_STYLE_DARK_3 = 52;
	const TABLE_STYLE_DARK_4 = 53;
	const TABLE_STYLE_DARK_5 = 54;
	const TABLE_STYLE_DARK_6 = 55;
	const TABLE_STYLE_DARK_7 = 56;
	const TABLE_STYLE_DARK_8 = 57;
	const TABLE_STYLE_DARK_9 = 58;
	const TABLE_STYLE_LIGHT_1 = 1;
	const TABLE_STYLE_LIGHT_10 = 10;
	const TABLE_STYLE_LIGHT_11 = 11;
	const TABLE_STYLE_LIGHT_12 = 12;
	const TABLE_STYLE_LIGHT_13 = 13;
	const TABLE_STYLE_LIGHT_14 = 14;
	const TABLE_STYLE_LIGHT_15 = 15;
	const TABLE_STYLE_LIGHT_16 = 16;
	const TABLE_STYLE_LIGHT_17 = 17;
	const TABLE_STYLE_LIGHT_18 = 18;
	const TABLE_STYLE_LIGHT_19 = 19;
	const TABLE_STYLE_LIGHT_2 = 2;
	const TABLE_STYLE_LIGHT_20 = 20;
	const TABLE_STYLE_LIGHT_21 = 21;
	const TABLE_STYLE_LIGHT_3 = 3;
	const TABLE_STYLE_LIGHT_4 = 4;
	const TABLE_STYLE_LIGHT_5 = 5;
	const TABLE_STYLE_LIGHT_6 = 6;
	const TABLE_STYLE_LIGHT_7 = 7;
	const TABLE_STYLE_LIGHT_8 = 8;
	const TABLE_STYLE_LIGHT_9 = 9;
	const TABLE_STYLE_MEDIUM_1 = 22;
	const TABLE_STYLE_MEDIUM_10 = 31;
	const TABLE_STYLE_MEDIUM_11 = 32;
	const TABLE_STYLE_MEDIUM_12 = 33;
	const TABLE_STYLE_MEDIUM_13 = 34;
	const TABLE_STYLE_MEDIUM_14 = 35;
	const TABLE_STYLE_MEDIUM_15 = 36;
	const TABLE_STYLE_MEDIUM_16 = 37;
	const TABLE_STYLE_MEDIUM_17 = 38;
	const TABLE_STYLE_MEDIUM_18 = 39;
	const TABLE_STYLE_MEDIUM_19 = 40;
	const TABLE_STYLE_MEDIUM_2 = 23;
	const TABLE_STYLE_MEDIUM_20 = 41;
	const TABLE_STYLE_MEDIUM_21 = 42;
	const TABLE_STYLE_MEDIUM_22 = 43;
	const TABLE_STYLE_MEDIUM_23 = 44;
	const TABLE_STYLE_MEDIUM_24 = 45;
	const TABLE_STYLE_MEDIUM_25 = 46;
	const TABLE_STYLE_MEDIUM_26 = 47;
	const TABLE_STYLE_MEDIUM_27 = 48;
	const TABLE_STYLE_MEDIUM_28 = 49;
	const TABLE_STYLE_MEDIUM_3 = 24;
	const TABLE_STYLE_MEDIUM_4 = 25;
	const TABLE_STYLE_MEDIUM_5 = 26;
	const TABLE_STYLE_MEDIUM_6 = 27;
	const TABLE_STYLE_MEDIUM_7 = 28;
	const TABLE_STYLE_MEDIUM_8 = 29;
	const TABLE_STYLE_MEDIUM_9 = 30;
};

final class TargetModeType {
	const CELL_REFERENCE = 3;
	const EMAIL = 2;
	const EXTERNAL = 0;
	const FILE_PATH = 1;
};

final class TextAlignmentType {
	const BOTTOM = 528;
	const CENTER = 1802;
	const CENTER_ACROSS = 1286;
	const DISTRIBUTED = 807;
	const FILL = 1284;
	const GENERAL = 1792;
	const JUSTIFIED_LOW = 832;
	const JUSTIFY = 1821;
	const LEFT = 257;
	const RIGHT = 259;
	const THAI_DISTRIBUTED = 896;
	const TOP = 512;
};

final class TextAutonumberScheme {
	const ALPHA_LC_PAREN_BOTH = 1;
	const ALPHA_LC_PAREN_R = 2;
	const ALPHA_LC_PERIOD = 3;
	const ALPHA_UC_PAREN_BOTH = 4;
	const ALPHA_UC_PAREN_R = 5;
	const ALPHA_UC_PERIOD = 6;
	const ARABIC_1_MINUS = 7;
	const ARABIC_2_MINUS = 8;
	const ARABIC_DB_PERIOD = 9;
	const ARABIC_DB_PLAIN = 10;
	const ARABIC_PAREN_BOTH = 11;
	const ARABIC_PAREN_R = 12;
	const ARABIC_PERIOD = 13;
	const ARABIC_PLAIN = 14;
	const CIRCLE_NUM_DB_PLAIN = 15;
	const CIRCLE_NUM_WD_BLACK_PLAIN = 16;
	const CIRCLE_NUM_WD_WHITE_PLAIN = 17;
	const EA_1_CHS_PERIOD = 18;
	const EA_1_CHS_PLAIN = 19;
	const EA_1_CHT_PERIOD = 20;
	const EA_1_CHT_PLAIN = 21;
	const EA_1_JPN_CHS_DB_PERIOD = 22;
	const EA_1_JPN_KOR_PERIOD = 23;
	const EA_1_JPN_KOR_PLAIN = 24;
	const HEBREW_2_MINUS = 25;
	const HINDI_ALPHA_1_PERIOD = 26;
	const HINDI_ALPHA_PERIOD = 27;
	const HINDI_NUM_PAREN_R = 28;
	const HINDI_NUM_PERIOD = 29;
	const NONE = 0;
	const ROMAN_LC_PAREN_BOTH = 30;
	const ROMAN_LC_PAREN_R = 31;
	const ROMAN_LC_PERIOD = 32;
	const ROMAN_UC_PAREN_BOTH = 33;
	const ROMAN_UC_PAREN_R = 34;
	const ROMAN_UC_PERIOD = 35;
	const THAI_ALPHA_PAREN_BOTH = 36;
	const THAI_ALPHA_PAREN_R = 37;
	const THAI_ALPHA_PERIOD = 38;
	const THAI_NUM_PAREN_BOTH = 39;
	const THAI_NUM_PAREN_R = 40;
	const THAI_NUM_PERIOD = 41;
};

final class TextCapsType {
	const ALL = 1;
	const NONE = 0;
	const SMALL = 2;
};

final class TextCrossType {
	const CROSS_KEEP = 2;
	const CROSS_OVERRIDE = 3;
	const DEFAULT = 1;
	const STRICT_IN_CELL = 4;
};

final class TextDirectionType {
	const CONTEXT = 0;
	const LEFT_TO_RIGHT = 1;
	const RIGHT_TO_LEFT = 2;
};

final class TextFontAlignType {
	const AUTOMATIC = 0;
	const BASELINE = 2;
	const BOTTOM = 1;
	const CENTER = 3;
	const TOP = 4;
};

final class TextNodeType {
	const EQUATION = 2;
	const TEXT_PARAGRAPH = 1;
	const TEXT_RUN = 0;
};

final class TextOrientationType {
	const CLOCK_WISE = 0;
	const COUNTER_CLOCK_WISE = 1;
	const NO_ROTATION = 2;
	const TOP_TO_BOTTOM = 3;
};

final class TextOverflowType {
	const CLIP = 0;
	const ELLIPSIS = 1;
	const OVERFLOW = 2;
};

final class TextStrikeType {
	const DOUBLE = 1;
	const NONE = 2;
	const SINGLE = 0;
};

final class TextTabAlignmentType {
	const CENTER = 0;
	const DECIMAL = 1;
	const LEFT = 2;
	const RIGHT = 3;
};

final class TextureType {
	const BLUE_TISSUE_PAPER = 0;
	const BOUQUET = 1;
	const BROWN_MARBLE = 2;
	const CANVAS = 3;
	const CORK = 4;
	const DENIM = 5;
	const FISH_FOSSIL = 6;
	const GRANITE = 7;
	const GREEN_MARBLE = 8;
	const MEDIUM_WOOD = 9;
	const NEWSPRINT = 10;
	const OAK = 11;
	const PAPER_BAG = 12;
	const PAPYRUS = 13;
	const PARCHMENT = 14;
	const PINK_TISSUE_PAPER = 15;
	const PURPLE_MESH = 16;
	const RECYCLED_PAPER = 17;
	const SAND = 18;
	const STATIONERY = 19;
	const UNKNOWN = 24;
	const WALNUT = 20;
	const WATER_DROPLETS = 21;
	const WHITE_MARBLE = 22;
	const WOVEN_MAT = 23;
};

final class TextVerticalType {
	const HORIZONTAL = 1;
	const STACKED = 5;
	const STACKED_RIGHT_TO_LEFT = 6;
	const VERTICAL = 0;
	const VERTICAL_270 = 4;
	const VERTICAL_90 = 3;
	const VERTICAL_LEFT_TO_RIGHT = 2;
};

final class ThemeColorType {
	const ACCENT_1 = 4;
	const ACCENT_2 = 5;
	const ACCENT_3 = 6;
	const ACCENT_4 = 7;
	const ACCENT_5 = 8;
	const ACCENT_6 = 9;
	const BACKGROUND_1 = 0;
	const BACKGROUND_2 = 2;
	const FOLLOWED_HYPERLINK = 11;
	const HYPERLINK = 10;
	const STYLE_COLOR = 12;
	const TEXT_1 = 1;
	const TEXT_2 = 3;
};

final class TickLabelAlignmentType {
	const CENTER = 0;
	const LEFT = 1;
	const RIGHT = 2;
};

final class TickLabelPositionType {
	const HIGH = 0;
	const LOW = 1;
	const NEXT_TO_AXIS = 2;
	const NONE = 3;
};

final class TickMarkType {
	const CROSS = 0;
	const INSIDE = 1;
	const NONE = 2;
	const OUTSIDE = 3;
};

final class TiffCompression {
	const COMPRESSION_CCITT_3 = 3;
	const COMPRESSION_CCITT_4 = 4;
	const COMPRESSION_LZW = 2;
	const COMPRESSION_NONE = 0;
	const COMPRESSION_RLE = 1;
};

final class TiffPhotometricInterpretation {
	const BLACKISZERO = 1;
	const WHITEISZERO = 0;
};

final class TimePeriodType {
	const LAST_7_DAYS = 3;
	const LAST_MONTH = 5;
	const LAST_WEEK = 8;
	const LAST_YEAR = 11;
	const NEXT_MONTH = 6;
	const NEXT_WEEK = 9;
	const NEXT_YEAR = 12;
	const THIS_MONTH = 4;
	const THIS_WEEK = 7;
	const THIS_YEAR = 10;
	const TODAY = 0;
	const TOMORROW = 2;
	const YESTERDAY = 1;
};

final class TimeUnit {
	const DAYS = 0;
	const MONTHS = 1;
	const YEARS = 2;
};

final class TotalsCalculation {
	const AVERAGE = 1;
	const COUNT = 2;
	const COUNT_NUMS = 3;
	const CUSTOM = 9;
	const MAX = 4;
	const MIN = 5;
	const NONE = 0;
	const STD_DEV = 7;
	const SUM = 6;
	const VAR = 8;
};

final class TrendlineType {
	const EXPONENTIAL = 0;
	const LINEAR = 1;
	const LOGARITHMIC = 2;
	const MOVING_AVERAGE = 3;
	const POLYNOMIAL = 4;
	const POWER = 5;
};

final class TxtLoadStyleStrategy {
	const BUILT_IN = 1;
	const EXACT_FORMAT = 2;
	const NONE = 0;
};

final class TxtValueQuoteType {
	const ALWAYS = 1;
	const MINIMUM = 2;
	const NEVER = 3;
	const NORMAL = 0;
};

final class UpdateLinksType {
	const ALWAYS = 2;
	const NEVER = 1;
	const USER_SET = 0;
};

final class ValidationAlertType {
	const INFORMATION = 0;
	const STOP = 1;
	const WARNING = 2;
};

final class ValidationType {
	const ANY_VALUE = 0;
	const CUSTOM = 7;
	const DATE = 4;
	const DECIMAL = 2;
	const LIST = 3;
	const TEXT_LENGTH = 6;
	const TIME = 5;
	const WHOLE_NUMBER = 1;
};

final class VbaModuleType {
	const CLASS_ = 2;
	const DESIGNER = 3;
	const DOCUMENT = 1;
	const PROCEDURAL = 0;
};

final class VbaProjectReferenceType {
	const CONTROL = 1;
	const PROJECT = 2;
	const REGISTERED = 0;
};

final class ViewType {
	const NORMAL_VIEW = 0;
	const PAGE_BREAK_PREVIEW = 1;
	const PAGE_LAYOUT_VIEW = 2;
};

final class VisibilityType {
	const HIDDEN = 1;
	const VERY_HIDDEN = 2;
	const VISIBLE = 0;
};

final class WebExtensionStoreType {
	const EX_CATALOG = 6;
	const EXCHANGE = 3;
	const FILE_SYSTEM = 4;
	const OMEX = 0;
	const REGISTRY = 5;
	const SP_APP = 2;
	const SP_CATALOG = 1;
};

final class WeightType {
	const HAIR_LINE = -1;
	const MEDIUM_LINE = 1;
	const SINGLE_LINE = 0;
	const WIDE_LINE = 2;
};

final class XAdESType {
	const NONE = 0;
	const X_AD_ES = 1;
};


class AboveAverage extends Java {
	static private $_className = "com.aspose.cells.AboveAverage";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class AbstractLowCodeProtectionProvider extends Java {
	static private $_className = "com.aspose.cells.AbstractLowCodeProtectionProvider";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class AutoFitterOptions extends Java {
	static private $_className = "com.aspose.cells.AutoFitterOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class AutoNumberedBulletValue extends Java {
	static private $_className = "com.aspose.cells.AutoNumberedBulletValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CalculationOptions extends Java {
	static private $_className = "com.aspose.cells.CalculationOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CellArea extends Java {
	static private $_className = "com.aspose.cells.CellArea";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}

	static function createCellArea(...$argv) {
		return Java(self::$_className)->createCellArea(...$argv);
	}
}

class CellsFactory extends Java {
	static private $_className = "com.aspose.cells.CellsFactory";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CellValue extends Java {
	static private $_className = "com.aspose.cells.CellValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CellWatch extends Java {
	static private $_className = "com.aspose.cells.CellWatch";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CellWatchCollection extends Java {
	static private $_className = "com.aspose.cells.CellWatchCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CharacterBulletValue extends Java {
	static private $_className = "com.aspose.cells.CharacterBulletValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ChartCalculateOptions extends Java {
	static private $_className = "com.aspose.cells.ChartCalculateOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ChartGlobalizationSettings extends Java {
	static private $_className = "com.aspose.cells.ChartGlobalizationSettings";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class Color extends Java {
	static private $_className = "com.aspose.cells.Color";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}

	static function fromArgb(...$argv) {
		return Java(self::$_className)->fromArgb(...$argv);
	}

	static function fromName(...$argv) {
		return Java(self::$_className)->fromName(...$argv);
	}

	static function getAliceBlue(...$argv) {
		return Java(self::$_className)->getAliceBlue(...$argv);
	}

	static function getAntiqueWhite(...$argv) {
		return Java(self::$_className)->getAntiqueWhite(...$argv);
	}

	static function getAqua(...$argv) {
		return Java(self::$_className)->getAqua(...$argv);
	}

	static function getAquamarine(...$argv) {
		return Java(self::$_className)->getAquamarine(...$argv);
	}

	static function getAzure(...$argv) {
		return Java(self::$_className)->getAzure(...$argv);
	}

	static function getBeige(...$argv) {
		return Java(self::$_className)->getBeige(...$argv);
	}

	static function getBisque(...$argv) {
		return Java(self::$_className)->getBisque(...$argv);
	}

	static function getBlack(...$argv) {
		return Java(self::$_className)->getBlack(...$argv);
	}

	static function getBlanchedAlmond(...$argv) {
		return Java(self::$_className)->getBlanchedAlmond(...$argv);
	}

	static function getBlue(...$argv) {
		return Java(self::$_className)->getBlue(...$argv);
	}

	static function getBlueViolet(...$argv) {
		return Java(self::$_className)->getBlueViolet(...$argv);
	}

	static function getBrown(...$argv) {
		return Java(self::$_className)->getBrown(...$argv);
	}

	static function getBurlyWood(...$argv) {
		return Java(self::$_className)->getBurlyWood(...$argv);
	}

	static function getCadetBlue(...$argv) {
		return Java(self::$_className)->getCadetBlue(...$argv);
	}

	static function getChartreuse(...$argv) {
		return Java(self::$_className)->getChartreuse(...$argv);
	}

	static function getChocolate(...$argv) {
		return Java(self::$_className)->getChocolate(...$argv);
	}

	static function getCoral(...$argv) {
		return Java(self::$_className)->getCoral(...$argv);
	}

	static function getCornflowerBlue(...$argv) {
		return Java(self::$_className)->getCornflowerBlue(...$argv);
	}

	static function getCornsilk(...$argv) {
		return Java(self::$_className)->getCornsilk(...$argv);
	}

	static function getCrimson(...$argv) {
		return Java(self::$_className)->getCrimson(...$argv);
	}

	static function getCyan(...$argv) {
		return Java(self::$_className)->getCyan(...$argv);
	}

	static function getDarkBlue(...$argv) {
		return Java(self::$_className)->getDarkBlue(...$argv);
	}

	static function getDarkCyan(...$argv) {
		return Java(self::$_className)->getDarkCyan(...$argv);
	}

	static function getDarkGoldenrod(...$argv) {
		return Java(self::$_className)->getDarkGoldenrod(...$argv);
	}

	static function getDarkGray(...$argv) {
		return Java(self::$_className)->getDarkGray(...$argv);
	}

	static function getDarkGreen(...$argv) {
		return Java(self::$_className)->getDarkGreen(...$argv);
	}

	static function getDarkKhaki(...$argv) {
		return Java(self::$_className)->getDarkKhaki(...$argv);
	}

	static function getDarkMagenta(...$argv) {
		return Java(self::$_className)->getDarkMagenta(...$argv);
	}

	static function getDarkOliveGreen(...$argv) {
		return Java(self::$_className)->getDarkOliveGreen(...$argv);
	}

	static function getDarkOrange(...$argv) {
		return Java(self::$_className)->getDarkOrange(...$argv);
	}

	static function getDarkOrchid(...$argv) {
		return Java(self::$_className)->getDarkOrchid(...$argv);
	}

	static function getDarkRed(...$argv) {
		return Java(self::$_className)->getDarkRed(...$argv);
	}

	static function getDarkSalmon(...$argv) {
		return Java(self::$_className)->getDarkSalmon(...$argv);
	}

	static function getDarkSeaGreen(...$argv) {
		return Java(self::$_className)->getDarkSeaGreen(...$argv);
	}

	static function getDarkSlateBlue(...$argv) {
		return Java(self::$_className)->getDarkSlateBlue(...$argv);
	}

	static function getDarkSlateGray(...$argv) {
		return Java(self::$_className)->getDarkSlateGray(...$argv);
	}

	static function getDarkTurquoise(...$argv) {
		return Java(self::$_className)->getDarkTurquoise(...$argv);
	}

	static function getDarkViolet(...$argv) {
		return Java(self::$_className)->getDarkViolet(...$argv);
	}

	static function getDeepPink(...$argv) {
		return Java(self::$_className)->getDeepPink(...$argv);
	}

	static function getDeepSkyBlue(...$argv) {
		return Java(self::$_className)->getDeepSkyBlue(...$argv);
	}

	static function getDimGray(...$argv) {
		return Java(self::$_className)->getDimGray(...$argv);
	}

	static function getDodgerBlue(...$argv) {
		return Java(self::$_className)->getDodgerBlue(...$argv);
	}

	static function getEmpty(...$argv) {
		return Java(self::$_className)->getEmpty(...$argv);
	}

	static function getFirebrick(...$argv) {
		return Java(self::$_className)->getFirebrick(...$argv);
	}

	static function getFloralWhite(...$argv) {
		return Java(self::$_className)->getFloralWhite(...$argv);
	}

	static function getForestGreen(...$argv) {
		return Java(self::$_className)->getForestGreen(...$argv);
	}

	static function getFuchsia(...$argv) {
		return Java(self::$_className)->getFuchsia(...$argv);
	}

	static function getGainsboro(...$argv) {
		return Java(self::$_className)->getGainsboro(...$argv);
	}

	static function getGhostWhite(...$argv) {
		return Java(self::$_className)->getGhostWhite(...$argv);
	}

	static function getGold(...$argv) {
		return Java(self::$_className)->getGold(...$argv);
	}

	static function getGoldenrod(...$argv) {
		return Java(self::$_className)->getGoldenrod(...$argv);
	}

	static function getGray(...$argv) {
		return Java(self::$_className)->getGray(...$argv);
	}

	static function getGreen(...$argv) {
		return Java(self::$_className)->getGreen(...$argv);
	}

	static function getGreenYellow(...$argv) {
		return Java(self::$_className)->getGreenYellow(...$argv);
	}

	static function getHoneydew(...$argv) {
		return Java(self::$_className)->getHoneydew(...$argv);
	}

	static function getHotPink(...$argv) {
		return Java(self::$_className)->getHotPink(...$argv);
	}

	static function getIndianRed(...$argv) {
		return Java(self::$_className)->getIndianRed(...$argv);
	}

	static function getIndigo(...$argv) {
		return Java(self::$_className)->getIndigo(...$argv);
	}

	static function getIvory(...$argv) {
		return Java(self::$_className)->getIvory(...$argv);
	}

	static function getKhaki(...$argv) {
		return Java(self::$_className)->getKhaki(...$argv);
	}

	static function getLavender(...$argv) {
		return Java(self::$_className)->getLavender(...$argv);
	}

	static function getLavenderBlush(...$argv) {
		return Java(self::$_className)->getLavenderBlush(...$argv);
	}

	static function getLawnGreen(...$argv) {
		return Java(self::$_className)->getLawnGreen(...$argv);
	}

	static function getLemonChiffon(...$argv) {
		return Java(self::$_className)->getLemonChiffon(...$argv);
	}

	static function getLightBlue(...$argv) {
		return Java(self::$_className)->getLightBlue(...$argv);
	}

	static function getLightCoral(...$argv) {
		return Java(self::$_className)->getLightCoral(...$argv);
	}

	static function getLightCyan(...$argv) {
		return Java(self::$_className)->getLightCyan(...$argv);
	}

	static function getLightGoldenrodYellow(...$argv) {
		return Java(self::$_className)->getLightGoldenrodYellow(...$argv);
	}

	static function getLightGray(...$argv) {
		return Java(self::$_className)->getLightGray(...$argv);
	}

	static function getLightGreen(...$argv) {
		return Java(self::$_className)->getLightGreen(...$argv);
	}

	static function getLightPink(...$argv) {
		return Java(self::$_className)->getLightPink(...$argv);
	}

	static function getLightSalmon(...$argv) {
		return Java(self::$_className)->getLightSalmon(...$argv);
	}

	static function getLightSeaGreen(...$argv) {
		return Java(self::$_className)->getLightSeaGreen(...$argv);
	}

	static function getLightSkyBlue(...$argv) {
		return Java(self::$_className)->getLightSkyBlue(...$argv);
	}

	static function getLightSlateGray(...$argv) {
		return Java(self::$_className)->getLightSlateGray(...$argv);
	}

	static function getLightSteelBlue(...$argv) {
		return Java(self::$_className)->getLightSteelBlue(...$argv);
	}

	static function getLightYellow(...$argv) {
		return Java(self::$_className)->getLightYellow(...$argv);
	}

	static function getLime(...$argv) {
		return Java(self::$_className)->getLime(...$argv);
	}

	static function getLimeGreen(...$argv) {
		return Java(self::$_className)->getLimeGreen(...$argv);
	}

	static function getLinen(...$argv) {
		return Java(self::$_className)->getLinen(...$argv);
	}

	static function getMagenta(...$argv) {
		return Java(self::$_className)->getMagenta(...$argv);
	}

	static function getMaroon(...$argv) {
		return Java(self::$_className)->getMaroon(...$argv);
	}

	static function getMediumAquamarine(...$argv) {
		return Java(self::$_className)->getMediumAquamarine(...$argv);
	}

	static function getMediumBlue(...$argv) {
		return Java(self::$_className)->getMediumBlue(...$argv);
	}

	static function getMediumOrchid(...$argv) {
		return Java(self::$_className)->getMediumOrchid(...$argv);
	}

	static function getMediumPurple(...$argv) {
		return Java(self::$_className)->getMediumPurple(...$argv);
	}

	static function getMediumSeaGreen(...$argv) {
		return Java(self::$_className)->getMediumSeaGreen(...$argv);
	}

	static function getMediumSlateBlue(...$argv) {
		return Java(self::$_className)->getMediumSlateBlue(...$argv);
	}

	static function getMediumSpringGreen(...$argv) {
		return Java(self::$_className)->getMediumSpringGreen(...$argv);
	}

	static function getMediumTurquoise(...$argv) {
		return Java(self::$_className)->getMediumTurquoise(...$argv);
	}

	static function getMediumVioletRed(...$argv) {
		return Java(self::$_className)->getMediumVioletRed(...$argv);
	}

	static function getMidnightBlue(...$argv) {
		return Java(self::$_className)->getMidnightBlue(...$argv);
	}

	static function getMintCream(...$argv) {
		return Java(self::$_className)->getMintCream(...$argv);
	}

	static function getMistyRose(...$argv) {
		return Java(self::$_className)->getMistyRose(...$argv);
	}

	static function getMoccasin(...$argv) {
		return Java(self::$_className)->getMoccasin(...$argv);
	}

	static function getNavajoWhite(...$argv) {
		return Java(self::$_className)->getNavajoWhite(...$argv);
	}

	static function getNavy(...$argv) {
		return Java(self::$_className)->getNavy(...$argv);
	}

	static function getOldLace(...$argv) {
		return Java(self::$_className)->getOldLace(...$argv);
	}

	static function getOlive(...$argv) {
		return Java(self::$_className)->getOlive(...$argv);
	}

	static function getOliveDrab(...$argv) {
		return Java(self::$_className)->getOliveDrab(...$argv);
	}

	static function getOrange(...$argv) {
		return Java(self::$_className)->getOrange(...$argv);
	}

	static function getOrangeRed(...$argv) {
		return Java(self::$_className)->getOrangeRed(...$argv);
	}

	static function getOrchid(...$argv) {
		return Java(self::$_className)->getOrchid(...$argv);
	}

	static function getPaleGoldenrod(...$argv) {
		return Java(self::$_className)->getPaleGoldenrod(...$argv);
	}

	static function getPaleGreen(...$argv) {
		return Java(self::$_className)->getPaleGreen(...$argv);
	}

	static function getPaleTurquoise(...$argv) {
		return Java(self::$_className)->getPaleTurquoise(...$argv);
	}

	static function getPaleVioletRed(...$argv) {
		return Java(self::$_className)->getPaleVioletRed(...$argv);
	}

	static function getPapayaWhip(...$argv) {
		return Java(self::$_className)->getPapayaWhip(...$argv);
	}

	static function getPeachPuff(...$argv) {
		return Java(self::$_className)->getPeachPuff(...$argv);
	}

	static function getPeru(...$argv) {
		return Java(self::$_className)->getPeru(...$argv);
	}

	static function getPink(...$argv) {
		return Java(self::$_className)->getPink(...$argv);
	}

	static function getPlum(...$argv) {
		return Java(self::$_className)->getPlum(...$argv);
	}

	static function getPowderBlue(...$argv) {
		return Java(self::$_className)->getPowderBlue(...$argv);
	}

	static function getPurple(...$argv) {
		return Java(self::$_className)->getPurple(...$argv);
	}

	static function getRed(...$argv) {
		return Java(self::$_className)->getRed(...$argv);
	}

	static function getRosyBrown(...$argv) {
		return Java(self::$_className)->getRosyBrown(...$argv);
	}

	static function getRoyalBlue(...$argv) {
		return Java(self::$_className)->getRoyalBlue(...$argv);
	}

	static function getSaddleBrown(...$argv) {
		return Java(self::$_className)->getSaddleBrown(...$argv);
	}

	static function getSalmon(...$argv) {
		return Java(self::$_className)->getSalmon(...$argv);
	}

	static function getSandyBrown(...$argv) {
		return Java(self::$_className)->getSandyBrown(...$argv);
	}

	static function getSeaGreen(...$argv) {
		return Java(self::$_className)->getSeaGreen(...$argv);
	}

	static function getSeaShell(...$argv) {
		return Java(self::$_className)->getSeaShell(...$argv);
	}

	static function getSienna(...$argv) {
		return Java(self::$_className)->getSienna(...$argv);
	}

	static function getSilver(...$argv) {
		return Java(self::$_className)->getSilver(...$argv);
	}

	static function getSkyBlue(...$argv) {
		return Java(self::$_className)->getSkyBlue(...$argv);
	}

	static function getSlateBlue(...$argv) {
		return Java(self::$_className)->getSlateBlue(...$argv);
	}

	static function getSlateGray(...$argv) {
		return Java(self::$_className)->getSlateGray(...$argv);
	}

	static function getSnow(...$argv) {
		return Java(self::$_className)->getSnow(...$argv);
	}

	static function getSpringGreen(...$argv) {
		return Java(self::$_className)->getSpringGreen(...$argv);
	}

	static function getSteelBlue(...$argv) {
		return Java(self::$_className)->getSteelBlue(...$argv);
	}

	static function getTan(...$argv) {
		return Java(self::$_className)->getTan(...$argv);
	}

	static function getTeal(...$argv) {
		return Java(self::$_className)->getTeal(...$argv);
	}

	static function getThistle(...$argv) {
		return Java(self::$_className)->getThistle(...$argv);
	}

	static function getTomato(...$argv) {
		return Java(self::$_className)->getTomato(...$argv);
	}

	static function getTransparent(...$argv) {
		return Java(self::$_className)->getTransparent(...$argv);
	}

	static function getTurquoise(...$argv) {
		return Java(self::$_className)->getTurquoise(...$argv);
	}

	static function getViolet(...$argv) {
		return Java(self::$_className)->getViolet(...$argv);
	}

	static function getWheat(...$argv) {
		return Java(self::$_className)->getWheat(...$argv);
	}

	static function getWhite(...$argv) {
		return Java(self::$_className)->getWhite(...$argv);
	}

	static function getWhiteSmoke(...$argv) {
		return Java(self::$_className)->getWhiteSmoke(...$argv);
	}

	static function getYellow(...$argv) {
		return Java(self::$_className)->getYellow(...$argv);
	}

	static function getYellowGreen(...$argv) {
		return Java(self::$_className)->getYellowGreen(...$argv);
	}
}

class CopyOptions extends Java {
	static private $_className = "com.aspose.cells.CopyOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CustomFilterCollection extends Java {
	static private $_className = "com.aspose.cells.CustomFilterCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CustomFunctionDefinition extends Java {
	static private $_className = "com.aspose.cells.CustomFunctionDefinition";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CustomPiovtFieldGroupItem extends Java {
	static private $_className = "com.aspose.cells.CustomPiovtFieldGroupItem";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class CustomProperty extends Java {
	static private $_className = "com.aspose.cells.CustomProperty";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DataSorterKeyCollection extends Java {
	static private $_className = "com.aspose.cells.DataSorterKeyCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DateTime extends Java {
	static private $_className = "com.aspose.cells.DateTime";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}

	static function getNow(...$argv) {
		return Java(self::$_className)->getNow(...$argv);
	}
}

class DateTimeGroupItem extends Java {
	static private $_className = "com.aspose.cells.DateTimeGroupItem";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DbfLoadOptions extends Java {
	static private $_className = "com.aspose.cells.DbfLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DbfSaveOptions extends Java {
	static private $_className = "com.aspose.cells.DbfSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DeleteBlankOptions extends Java {
	static private $_className = "com.aspose.cells.DeleteBlankOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DeleteOptions extends Java {
	static private $_className = "com.aspose.cells.DeleteOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DifLoadOptions extends Java {
	static private $_className = "com.aspose.cells.DifLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DifSaveOptions extends Java {
	static private $_className = "com.aspose.cells.DifSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DigitalSignature extends Java {
	static private $_className = "com.aspose.cells.DigitalSignature";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DigitalSignatureCollection extends Java {
	static private $_className = "com.aspose.cells.DigitalSignatureCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class DocxSaveOptions extends Java {
	static private $_className = "com.aspose.cells.DocxSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class EbookLoadOptions extends Java {
	static private $_className = "com.aspose.cells.EbookLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class EbookSaveOptions extends Java {
	static private $_className = "com.aspose.cells.EbookSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ExportRangeToJsonOptions extends Java {
	static private $_className = "com.aspose.cells.ExportRangeToJsonOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class FileFontSource extends Java {
	static private $_className = "com.aspose.cells.FileFontSource";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class FileFormatInfo extends Java {
	static private $_className = "com.aspose.cells.FileFormatInfo";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class FindOptions extends Java {
	static private $_className = "com.aspose.cells.FindOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class FolderFontSource extends Java {
	static private $_className = "com.aspose.cells.FolderFontSource";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class FontConfigs extends Java {
	static private $_className = "com.aspose.cells.FontConfigs";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}

	static function getDefaultFontName(...$argv) {
		return Java(self::$_className)->getDefaultFontName(...$argv);
	}

	static function getFontFileDataInfo(...$argv) {
		return Java(self::$_className)->getFontFileDataInfo(...$argv);
	}

	static function getFontSources(...$argv) {
		return Java(self::$_className)->getFontSources(...$argv);
	}

	static function getFontSubstitutes(...$argv) {
		return Java(self::$_className)->getFontSubstitutes(...$argv);
	}

	static function isFontAvailable(...$argv) {
		return Java(self::$_className)->isFontAvailable(...$argv);
	}

	static function setDefaultFontName(...$argv) {
		Java(self::$_className)->setDefaultFontName(...$argv);
	}

	static function setFontExclusiveSources(...$argv) {
		Java(self::$_className)->setFontExclusiveSources(...$argv);
	}

	static function setFontFolder(...$argv) {
		Java(self::$_className)->setFontFolder(...$argv);
	}

	static function setFontFolders(...$argv) {
		Java(self::$_className)->setFontFolders(...$argv);
	}

	static function setFontSources(...$argv) {
		Java(self::$_className)->setFontSources(...$argv);
	}

	static function setFontSubstitutes(...$argv) {
		Java(self::$_className)->setFontSubstitutes(...$argv);
	}
}

class FontSetting extends Java {
	static private $_className = "com.aspose.cells.FontSetting";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class FormulaParseOptions extends Java {
	static private $_className = "com.aspose.cells.FormulaParseOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class GlobalizationSettings extends Java {
	static private $_className = "com.aspose.cells.GlobalizationSettings";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class HighlightChangesOptions extends Java {
	static private $_className = "com.aspose.cells.HighlightChangesOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class HtmlLoadOptions extends Java {
	static private $_className = "com.aspose.cells.HtmlLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class HtmlSaveOptions extends Java {
	static private $_className = "com.aspose.cells.HtmlSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class HtmlTableLoadOption extends Java {
	static private $_className = "com.aspose.cells.HtmlTableLoadOption";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class HtmlTableLoadOptionCollection extends Java {
	static private $_className = "com.aspose.cells.HtmlTableLoadOptionCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ImageOrPrintOptions extends Java {
	static private $_className = "com.aspose.cells.ImageOrPrintOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ImageSaveOptions extends Java {
	static private $_className = "com.aspose.cells.ImageSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class IndividualFontConfigs extends Java {
	static private $_className = "com.aspose.cells.IndividualFontConfigs";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class InsertOptions extends Java {
	static private $_className = "com.aspose.cells.InsertOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class JsonLayoutOptions extends Java {
	static private $_className = "com.aspose.cells.JsonLayoutOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class JsonLoadOptions extends Java {
	static private $_className = "com.aspose.cells.JsonLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class JsonSaveOptions extends Java {
	static private $_className = "com.aspose.cells.JsonSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class JsonUtility extends Java {
	static private $_className = "com.aspose.cells.JsonUtility";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}

	static function exportRangeToJson(...$argv) {
		return Java(self::$_className)->exportRangeToJson(...$argv);
	}

	static function importData(...$argv) {
		return Java(self::$_className)->importData(...$argv);
	}
}

class License extends Java {
	static private $_className = "com.aspose.cells.License";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}

	static function getSubscriptionExpireDate(...$argv) {
		return Java(self::$_className)->getSubscriptionExpireDate(...$argv);
	}

	static function isLicenseSet(...$argv) {
		return Java(self::$_className)->isLicenseSet(...$argv);
	}
}

class LoadFilter extends Java {
	static private $_className = "com.aspose.cells.LoadFilter";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LoadOptions extends Java {
	static private $_className = "com.aspose.cells.LoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LowCodeHtmlSaveOptions extends Java {
	static private $_className = "com.aspose.cells.LowCodeHtmlSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LowCodeImageSaveOptions extends Java {
	static private $_className = "com.aspose.cells.LowCodeImageSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LowCodeLoadOptions extends Java {
	static private $_className = "com.aspose.cells.LowCodeLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LowCodeMergeOptions extends Java {
	static private $_className = "com.aspose.cells.LowCodeMergeOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LowCodePdfSaveOptions extends Java {
	static private $_className = "com.aspose.cells.LowCodePdfSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LowCodeSaveOptions extends Java {
	static private $_className = "com.aspose.cells.LowCodeSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LowCodeSaveOptionsProviderOfAssembling extends Java {
	static private $_className = "com.aspose.cells.LowCodeSaveOptionsProviderOfAssembling";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LowCodeSaveOptionsProviderOfPlaceHolders extends Java {
	static private $_className = "com.aspose.cells.LowCodeSaveOptionsProviderOfPlaceHolders";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class LowCodeSplitOptions extends Java {
	static private $_className = "com.aspose.cells.LowCodeSplitOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class MarkdownSaveOptions extends Java {
	static private $_className = "com.aspose.cells.MarkdownSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class MemoryFontSource extends Java {
	static private $_className = "com.aspose.cells.MemoryFontSource";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class MetadataOptions extends Java {
	static private $_className = "com.aspose.cells.MetadataOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class Metered extends Java {
	static private $_className = "com.aspose.cells.Metered";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}

	static function getConsumptionCredit(...$argv) {
		return Java(self::$_className)->getConsumptionCredit(...$argv);
	}

	static function getConsumptionQuantity(...$argv) {
		return Java(self::$_className)->getConsumptionQuantity(...$argv);
	}

	static function isMeteredLicensed(...$argv) {
		return Java(self::$_className)->isMeteredLicensed(...$argv);
	}
}

class MultipleFilterCollection extends Java {
	static private $_className = "com.aspose.cells.MultipleFilterCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class NoneBulletValue extends Java {
	static private $_className = "com.aspose.cells.NoneBulletValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class NumbersLoadOptions extends Java {
	static private $_className = "com.aspose.cells.NumbersLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class OdsLoadOptions extends Java {
	static private $_className = "com.aspose.cells.OdsLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class OdsPageBackground extends Java {
	static private $_className = "com.aspose.cells.OdsPageBackground";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class OdsSaveOptions extends Java {
	static private $_className = "com.aspose.cells.OdsSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class OoxmlSaveOptions extends Java {
	static private $_className = "com.aspose.cells.OoxmlSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PasteOptions extends Java {
	static private $_className = "com.aspose.cells.PasteOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PclSaveOptions extends Java {
	static private $_className = "com.aspose.cells.PclSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PdfBookmarkEntry extends Java {
	static private $_className = "com.aspose.cells.PdfBookmarkEntry";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PdfSaveOptions extends Java {
	static private $_className = "com.aspose.cells.PdfSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PdfSecurityOptions extends Java {
	static private $_className = "com.aspose.cells.PdfSecurityOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PicFormatOption extends Java {
	static private $_className = "com.aspose.cells.PicFormatOption";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PictureBulletValue extends Java {
	static private $_className = "com.aspose.cells.PictureBulletValue";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PivotArea extends Java {
	static private $_className = "com.aspose.cells.PivotArea";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PivotAreaFilter extends Java {
	static private $_className = "com.aspose.cells.PivotAreaFilter";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PivotAreaFilterCollection extends Java {
	static private $_className = "com.aspose.cells.PivotAreaFilterCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PivotFieldGroupSettings extends Java {
	static private $_className = "com.aspose.cells.PivotFieldGroupSettings";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PivotGlobalizationSettings extends Java {
	static private $_className = "com.aspose.cells.PivotGlobalizationSettings";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PivotPageFields extends Java {
	static private $_className = "com.aspose.cells.PivotPageFields";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PivotTableCalculateOption extends Java {
	static private $_className = "com.aspose.cells.PivotTableCalculateOption";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PivotTableRefreshOption extends Java {
	static private $_className = "com.aspose.cells.PivotTableRefreshOption";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PowerQueryFormulaParameterCollection extends Java {
	static private $_className = "com.aspose.cells.PowerQueryFormulaParameterCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class PptxSaveOptions extends Java {
	static private $_className = "com.aspose.cells.PptxSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class RenderingFont extends Java {
	static private $_className = "com.aspose.cells.RenderingFont";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class RenderingWatermark extends Java {
	static private $_className = "com.aspose.cells.RenderingWatermark";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ReplaceOptions extends Java {
	static private $_className = "com.aspose.cells.ReplaceOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class RevisionHeader extends Java {
	static private $_className = "com.aspose.cells.RevisionHeader";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SensitivityLabelCollection extends Java {
	static private $_className = "com.aspose.cells.SensitivityLabelCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SeriesLayoutProperties extends Java {
	static private $_className = "com.aspose.cells.SeriesLayoutProperties";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SettableChartGlobalizationSettings extends Java {
	static private $_className = "com.aspose.cells.SettableChartGlobalizationSettings";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SettableGlobalizationSettings extends Java {
	static private $_className = "com.aspose.cells.SettableGlobalizationSettings";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SettablePivotGlobalizationSettings extends Java {
	static private $_className = "com.aspose.cells.SettablePivotGlobalizationSettings";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ShapeGuideCollection extends Java {
	static private $_className = "com.aspose.cells.ShapeGuideCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ShapePath extends Java {
	static private $_className = "com.aspose.cells.ShapePath";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ShapePathPointCollection extends Java {
	static private $_className = "com.aspose.cells.ShapePathPointCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ShapeSegmentPathCollection extends Java {
	static private $_className = "com.aspose.cells.ShapeSegmentPathCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SheetPrintingPreview extends Java {
	static private $_className = "com.aspose.cells.SheetPrintingPreview";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SheetRender extends Java {
	static private $_className = "com.aspose.cells.SheetRender";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SheetSet extends Java {
	static private $_className = "com.aspose.cells.SheetSet";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}

	static function getActive(...$argv) {
		return Java(self::$_className)->getActive(...$argv);
	}

	static function getAll(...$argv) {
		return Java(self::$_className)->getAll(...$argv);
	}

	static function getVisible(...$argv) {
		return Java(self::$_className)->getVisible(...$argv);
	}
}

class SignatureLine extends Java {
	static private $_className = "com.aspose.cells.SignatureLine";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SmartTagOptions extends Java {
	static private $_className = "com.aspose.cells.SmartTagOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SmartTagPropertyCollection extends Java {
	static private $_className = "com.aspose.cells.SmartTagPropertyCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SpreadsheetML2003SaveOptions extends Java {
	static private $_className = "com.aspose.cells.SpreadsheetML2003SaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SqlScriptColumnTypeMap extends Java {
	static private $_className = "com.aspose.cells.SqlScriptColumnTypeMap";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SqlScriptSaveOptions extends Java {
	static private $_className = "com.aspose.cells.SqlScriptSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class Style extends Java {
	static private $_className = "com.aspose.cells.Style";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class StyleFlag extends Java {
	static private $_className = "com.aspose.cells.StyleFlag";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SvgImageOptions extends Java {
	static private $_className = "com.aspose.cells.SvgImageOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SvgSaveOptions extends Java {
	static private $_className = "com.aspose.cells.SvgSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class SystemTimeInterruptMonitor extends Java {
	static private $_className = "com.aspose.cells.SystemTimeInterruptMonitor";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class TableToRangeOptions extends Java {
	static private $_className = "com.aspose.cells.TableToRangeOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class TextTabStopCollection extends Java {
	static private $_className = "com.aspose.cells.TextTabStopCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ThemeColor extends Java {
	static private $_className = "com.aspose.cells.ThemeColor";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ThreadedCommentAuthorCollection extends Java {
	static private $_className = "com.aspose.cells.ThreadedCommentAuthorCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class ThreadInterruptMonitor extends Java {
	static private $_className = "com.aspose.cells.ThreadInterruptMonitor";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class TilePicOption extends Java {
	static private $_className = "com.aspose.cells.TilePicOption";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class Top10 extends Java {
	static private $_className = "com.aspose.cells.Top10";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class TwoColorGradient extends Java {
	static private $_className = "com.aspose.cells.TwoColorGradient";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class TxtLoadOptions extends Java {
	static private $_className = "com.aspose.cells.TxtLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class TxtSaveOptions extends Java {
	static private $_className = "com.aspose.cells.TxtSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class WebExtensionBinding extends Java {
	static private $_className = "com.aspose.cells.WebExtensionBinding";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class WebExtensionBindingCollection extends Java {
	static private $_className = "com.aspose.cells.WebExtensionBindingCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class WebExtensionPropertyCollection extends Java {
	static private $_className = "com.aspose.cells.WebExtensionPropertyCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class WebExtensionReferenceCollection extends Java {
	static private $_className = "com.aspose.cells.WebExtensionReferenceCollection";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class Workbook extends Java {
	static private $_className = "com.aspose.cells.Workbook";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class WorkbookDesigner extends Java {
	static private $_className = "com.aspose.cells.WorkbookDesigner";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class WorkbookMetadata extends Java {
	static private $_className = "com.aspose.cells.WorkbookMetadata";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class WorkbookPrintingPreview extends Java {
	static private $_className = "com.aspose.cells.WorkbookPrintingPreview";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class WorkbookRender extends Java {
	static private $_className = "com.aspose.cells.WorkbookRender";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class XlsbSaveOptions extends Java {
	static private $_className = "com.aspose.cells.XlsbSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class XlsSaveOptions extends Java {
	static private $_className = "com.aspose.cells.XlsSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class XmlColumnProperty extends Java {
	static private $_className = "com.aspose.cells.XmlColumnProperty";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class XmlLoadOptions extends Java {
	static private $_className = "com.aspose.cells.XmlLoadOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class XmlSaveOptions extends Java {
	static private $_className = "com.aspose.cells.XmlSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}

class XpsSaveOptions extends Java {
	static private $_className = "com.aspose.cells.XpsSaveOptions";
	function __construct(...$argv) {
		parent::__construct(self::$_className, ...$argv);
	}
}


class CellsHelper extends Java {
	static private $_className = "com.aspose.cells.CellsHelper";

	static function addAddInFunction(...$argv) {
		Java(self::$_className)->addAddInFunction(...$argv);
	}

	static function cellIndexToName(...$argv) {
		return Java(self::$_className)->cellIndexToName(...$argv);
	}

	static function cellNameToIndex(...$argv) {
		return Java(self::$_className)->cellNameToIndex(...$argv);
	}

	static function columnIndexToName(...$argv) {
		return Java(self::$_className)->columnIndexToName(...$argv);
	}

	static function columnNameToIndex(...$argv) {
		return Java(self::$_className)->columnNameToIndex(...$argv);
	}

	static function convertA1FormulaToR1C1(...$argv) {
		return Java(self::$_className)->convertA1FormulaToR1C1(...$argv);
	}

	static function convertR1C1FormulaToA1(...$argv) {
		return Java(self::$_className)->convertR1C1FormulaToA1(...$argv);
	}

	static function createSafeSheetName(...$argv) {
		return Java(self::$_className)->createSafeSheetName(...$argv);
	}

	static function getAltStartPath(...$argv) {
		return Java(self::$_className)->getAltStartPath(...$argv);
	}

	static function getCustomImplementationFactory(...$argv) {
		return Java(self::$_className)->getCustomImplementationFactory(...$argv);
	}

	static function getDPI(...$argv) {
		return Java(self::$_className)->getDPI(...$argv);
	}

	static function getDateTimeFromDouble(...$argv) {
		return Java(self::$_className)->getDateTimeFromDouble(...$argv);
	}

	static function getDoubleFromDateTime(...$argv) {
		return Java(self::$_className)->getDoubleFromDateTime(...$argv);
	}

	static function getLibraryPath(...$argv) {
		return Java(self::$_className)->getLibraryPath(...$argv);
	}

	static function getSignificantDigits(...$argv) {
		return Java(self::$_className)->getSignificantDigits(...$argv);
	}

	static function getStartupPath(...$argv) {
		return Java(self::$_className)->getStartupPath(...$argv);
	}

	static function getTextWidth(...$argv) {
		return Java(self::$_className)->getTextWidth(...$argv);
	}

	static function getUsedColors(...$argv) {
		return Java(self::$_className)->getUsedColors(...$argv);
	}

	static function getVersion(...$argv) {
		return Java(self::$_className)->getVersion(...$argv);
	}

	static function isCloudPlatform(...$argv) {
		return Java(self::$_className)->isCloudPlatform(...$argv);
	}

	static function mergeFiles(...$argv) {
		Java(self::$_className)->mergeFiles(...$argv);
	}

	static function needQuoteInFormula(...$argv) {
		return Java(self::$_className)->needQuoteInFormula(...$argv);
	}

	static function rowIndexToName(...$argv) {
		return Java(self::$_className)->rowIndexToName(...$argv);
	}

	static function rowNameToIndex(...$argv) {
		return Java(self::$_className)->rowNameToIndex(...$argv);
	}

	static function setAltStartPath(...$argv) {
		Java(self::$_className)->setAltStartPath(...$argv);
	}

	static function setCloudPlatform(...$argv) {
		Java(self::$_className)->setCloudPlatform(...$argv);
	}

	static function setCustomImplementationFactory(...$argv) {
		Java(self::$_className)->setCustomImplementationFactory(...$argv);
	}

	static function setDPI(...$argv) {
		Java(self::$_className)->setDPI(...$argv);
	}

	static function setLibraryPath(...$argv) {
		Java(self::$_className)->setLibraryPath(...$argv);
	}

	static function setSignificantDigits(...$argv) {
		Java(self::$_className)->setSignificantDigits(...$argv);
	}

	static function setStartupPath(...$argv) {
		Java(self::$_className)->setStartupPath(...$argv);
	}
}

class ColorHelper extends Java {
	static private $_className = "com.aspose.cells.ColorHelper";

	static function fromOleColor(...$argv) {
		return Java(self::$_className)->fromOleColor(...$argv);
	}

	static function toOleColor(...$argv) {
		return Java(self::$_className)->toOleColor(...$argv);
	}
}

class ConditionalFormattingIcon extends Java {
	static private $_className = "com.aspose.cells.ConditionalFormattingIcon";

	static function getIconImageData(...$argv) {
		return Java(self::$_className)->getIconImageData(...$argv);
	}
}

class ConversionUtility extends Java {
	static private $_className = "com.aspose.cells.ConversionUtility";

	static function convert(...$argv) {
		Java(self::$_className)->convert(...$argv);
	}
}

class Encoding extends Java {
	static private $_className = "com.aspose.cells.Encoding";

	static function getASCII(...$argv) {
		return Java(self::$_className)->getASCII(...$argv);
	}

	static function getBigEndianUnicode(...$argv) {
		return Java(self::$_className)->getBigEndianUnicode(...$argv);
	}

	static function getDefault(...$argv) {
		return Java(self::$_className)->getDefault(...$argv);
	}

	static function getEncoding(...$argv) {
		return Java(self::$_className)->getEncoding(...$argv);
	}

	static function getUTF7(...$argv) {
		return Java(self::$_className)->getUTF7(...$argv);
	}

	static function getUTF8(...$argv) {
		return Java(self::$_className)->getUTF8(...$argv);
	}

	static function getUTF8NoBOM(...$argv) {
		return Java(self::$_className)->getUTF8NoBOM(...$argv);
	}

	static function getUnicode(...$argv) {
		return Java(self::$_className)->getUnicode(...$argv);
	}
}

class EquationNode extends Java {
	static private $_className = "com.aspose.cells.EquationNode";

	static function createNode(...$argv) {
		return Java(self::$_className)->createNode(...$argv);
	}
}

class FileFormatUtil extends Java {
	static private $_className = "com.aspose.cells.FileFormatUtil";

	static function detectFileFormat(...$argv) {
		return Java(self::$_className)->detectFileFormat(...$argv);
	}

	static function extensionToSaveFormat(...$argv) {
		return Java(self::$_className)->extensionToSaveFormat(...$argv);
	}

	static function fileFormatToSaveFormat(...$argv) {
		return Java(self::$_className)->fileFormatToSaveFormat(...$argv);
	}

	static function isTemplateFormat(...$argv) {
		return Java(self::$_className)->isTemplateFormat(...$argv);
	}

	static function loadFormatToExtension(...$argv) {
		return Java(self::$_className)->loadFormatToExtension(...$argv);
	}

	static function loadFormatToSaveFormat(...$argv) {
		return Java(self::$_className)->loadFormatToSaveFormat(...$argv);
	}

	static function saveFormatToExtension(...$argv) {
		return Java(self::$_className)->saveFormatToExtension(...$argv);
	}

	static function saveFormatToLoadFormat(...$argv) {
		return Java(self::$_className)->saveFormatToLoadFormat(...$argv);
	}

	static function verifyPassword(...$argv) {
		return Java(self::$_className)->verifyPassword(...$argv);
	}
}

class HtmlConverter extends Java {
	static private $_className = "com.aspose.cells.HtmlConverter";

	static function process(...$argv) {
		Java(self::$_className)->process(...$argv);
	}
}

class ImageConverter extends Java {
	static private $_className = "com.aspose.cells.ImageConverter";

	static function process(...$argv) {
		Java(self::$_className)->process(...$argv);
	}
}

class ImageFormat extends Java {
	static private $_className = "com.aspose.cells.ImageFormat";

	static function getBmp(...$argv) {
		return Java(self::$_className)->getBmp(...$argv);
	}

	static function getEmf(...$argv) {
		return Java(self::$_className)->getEmf(...$argv);
	}

	static function getExif(...$argv) {
		return Java(self::$_className)->getExif(...$argv);
	}

	static function getGif(...$argv) {
		return Java(self::$_className)->getGif(...$argv);
	}

	static function getIcon(...$argv) {
		return Java(self::$_className)->getIcon(...$argv);
	}

	static function getImageFormatFromSuffixName(...$argv) {
		return Java(self::$_className)->getImageFormatFromSuffixName(...$argv);
	}

	static function getJpeg(...$argv) {
		return Java(self::$_className)->getJpeg(...$argv);
	}

	static function getMemoryBmp(...$argv) {
		return Java(self::$_className)->getMemoryBmp(...$argv);
	}

	static function getPng(...$argv) {
		return Java(self::$_className)->getPng(...$argv);
	}

	static function getTiff(...$argv) {
		return Java(self::$_className)->getTiff(...$argv);
	}

	static function getWmf(...$argv) {
		return Java(self::$_className)->getWmf(...$argv);
	}
}

class JsonConverter extends Java {
	static private $_className = "com.aspose.cells.JsonConverter";

	static function process(...$argv) {
		Java(self::$_className)->process(...$argv);
	}
}

class PdfConverter extends Java {
	static private $_className = "com.aspose.cells.PdfConverter";

	static function process(...$argv) {
		Java(self::$_className)->process(...$argv);
	}
}

class SpreadsheetConverter extends Java {
	static private $_className = "com.aspose.cells.SpreadsheetConverter";

	static function process(...$argv) {
		Java(self::$_className)->process(...$argv);
	}
}

class SpreadsheetLocker extends Java {
	static private $_className = "com.aspose.cells.SpreadsheetLocker";

	static function process(...$argv) {
		Java(self::$_className)->process(...$argv);
	}
}

class SpreadsheetMerger extends Java {
	static private $_className = "com.aspose.cells.SpreadsheetMerger";

	static function process(...$argv) {
		Java(self::$_className)->process(...$argv);
	}
}

class SpreadsheetSplitter extends Java {
	static private $_className = "com.aspose.cells.SpreadsheetSplitter";

	static function process(...$argv) {
		Java(self::$_className)->process(...$argv);
	}
}

class TextConverter extends Java {
	static private $_className = "com.aspose.cells.TextConverter";

	static function process(...$argv) {
		Java(self::$_className)->process(...$argv);
	}
}



?>
