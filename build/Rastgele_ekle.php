<?php

function tekrarla()
{
    include('Connectmysql.php');
    $name_list = array('Zeynep', 'Elif', 'Ecrin', 'Yağmur', 'Zehra', 'Azra', 'Nisanur', 'Ela', 'Belinay', 'Nehir', 'Hiranur', 'Meryem', 'Irmak', 'Eylül ', 'Sümeyye', 'Cemre', 'Rabia', 'Ayşe', 'Fatma', 'Mehmet', 'Mustafa', 'Ahmet', 'Ali', 'Hüseyin', 'Hasan', 'İbrahim', 'İsmail', 'Osman', 'Halil', 'Süleyman', 'Yusuf', 'Ömer', 'Abdullah', 'Mahmut', 'Salih', 'Kemal', 'Ramazan', 'Recep', 'Mehmet Ali', 'Yusuf', 'Berat', 'Emir', 'Mustafa', 'Ahmet', 'Ömer', 'Mehmet', 'Muhammed', 'Emirhan', 'Eymen', 'Ali', 'Çınar', 'Enes', 'Kerem', 'Miraç', 'Umut', 'İbrahim', 'Furkan', 'Hüseyin', 'Yunus Emre');
    $surname_list = array('Yıldız', 'Yıldırım', 'Öztürk', 'Aydın', 'Özdemir', 'Arslan', 'Doğan', 'Kılıç', 'Aslan', 'Çetin', 'Kara', 'Koç', 'Kurt', 'Özkan', 'Şimşek');
    $tel_list = array(
        223006012001, 223006012002, 223006012003, 223006012004, 223006012005, 223006012006, 223006012007, 223006012008, 223006012009, 223006012010, 223006012011, 223006012012, 223006012013, 223006012014, 223006012015, 223006012016, 223006012017, 223006012018, 223006012019, 223006012020, 223006012021, 223006012022, 223006012023, 223006012024, 223006012025, 223006012026, 223006012027, 223006012028, 223006012029, 223006012030, 223006012031, 223006012032, 223006012033, 223006012034, 223006012035, 223006012036, 223006012037, 223006012038, 223006012039, 223006012040, 223006012041, 223006012042, 223006012043, 223006012044, 223006012045, 223006012046, 223006012047, 223006012048, 223006012049, 223006012050, 223006012051, 223006012052, 223006012053, 223006012054, 223006012055, 223006012056, 223006012057, 223006012058, 223006012059, 223006012060, 223006012061, 223006012062, 223006012063, 223006012064, 223006012065, 223006012066, 223006012067, 223006012068, 223006012069, 223006012070, 223006012071, 223006012072, 223006012073, 223006012074, 223006012075, 223006012076, 223006012077, 223006012078, 223006012079, 223006012080, 223006012081, 223006012082, 223006012083, 223006012084, 223006012085, 223006012086, 223006012087, 223006012088, 223006012089, 223006012090, 223006012091, 223006012092, 223006012093, 223006012094, 223006012095, 223006012096, 223006012097, 223006012098, 223006012099, 223006012100, 223006012101, 223006012102, 223006012103, 223006012104, 223006012105, 223006012106, 223006012107, 223006012108, 223006012109, 223006012110, 223006012111, 223006012112, 223006012113, 223006012114, 223006012115, 223006012116, 223006012117, 223006012118, 223006012119, 223006012120, 223006012121, 223006012122, 223006012123, 223006012124, 223006012125, 223006012126, 223006012127, 223006012128, 223006012129, 223006012130, 223006012131, 223006012132, 223006012133, 223006012134, 223006012135, 223006012136, 223006012137, 223006012138, 223006012139, 223006012140, 223006012141, 223006012142, 223006012143, 223006012144, 223006012145, 223006012146, 223006012147, 223006012148, 223006012149, 223006012150, 223006012151, 223006012152, 223006012153, 223006012154, 223006012155, 223006012156, 223006012157, 223006012158, 223006012159, 223006012160, 223006012161, 223006012162, 223006012163, 223006012164, 223006012165, 223006012166, 223006012167, 223006012168, 223006012169, 223006012170, 223006012171, 223006012172, 223006012173, 223006012174, 223006012175, 223006012176, 223006012177, 223006012178, 223006012179, 223006012180, 223006012181, 223006012182, 223006012183, 223006012184, 223006012185, 223006012186, 223006012187, 223006012188, 223006012189, 223006012190, 223006012191, 223006012192, 223006012193, 223006012194, 223006012195, 223006012196, 223006012197, 223006012198, 223006012199, 223006012200, 223006012201, 223006012202, 223006012203, 223006012204, 223006012205, 223006012206, 223006012207, 223006012208, 223006012209, 223006012210, 223006012211, 223006012212, 223006012213, 223006012214, 223006012215, 223006012216, 223006012217, 223006012218, 223006012219, 223006012220, 223006012221, 223006012222, 223006012223, 223006012224, 223006012225, 223006012226, 223006012227, 223006012228, 223006012229, 223006012230, 223006012231, 223006012232, 223006012233, 223006012234, 223006012235, 223006012236, 223006012237, 223006012238, 223006012239, 223006012240, 223006012241, 223006012242, 223006012243, 223006012244, 223006012245, 223006012246, 223006012247, 223006012248, 223006012249, 223006012250, 223006012251, 223006012252, 223006012253, 223006012254, 223006012255, 223006012256, 223006012257, 223006012258, 223006012259, 223006012260, 223006012261, 223006012262, 223006012263, 223006012264, 223006012265, 223006012266, 223006012267, 223006012268, 223006012269, 223006012270, 223006012271, 223006012272, 223006012273, 223006012274, 223006012275, 223006012276, 223006012277, 223006012278, 223006012279, 223006012280, 223006012281, 223006012282, 223006012283, 223006012284, 223006012285, 223006012286, 223006012287, 223006012288, 223006012289, 223006012290, 223006012291, 223006012292, 223006012293, 223006012294, 223006012295, 223006012296, 223006012297, 223006012298, 223006012299, 223006012300, 223006012301, 223006012302, 223006012303, 223006012304, 223006012305, 223006012306, 223006012307, 223006012308, 223006012309, 223006012310, 223006012311, 223006012312, 223006012313, 223006012314, 223006012315, 223006012316, 223006012317, 223006012318, 223006012319, 223006012320, 223006012321, 223006012322, 223006012323, 223006012324, 223006012325, 223006012326, 223006012327, 223006012328, 223006012329, 223006012330, 223006012331, 223006012332, 223006012333, 223006012334, 223006012335, 223006012336, 223006012337, 223006012338, 223006012339, 223006012340, 223006012341, 223006012342, 223006012343, 223006012344, 223006012345, 223006012346, 223006012347, 223006012348, 223006012349, 223006012350, 223006012351, 223006012352, 223006012353, 223006012354, 223006012355, 223006012356, 223006012357, 223006012358, 223006012359, 223006012360, 223006012361, 223006012362, 223006012363, 223006012364, 223006012365, 223006012366, 223006012367, 223006012368, 223006012369, 223006012370, 223006012371, 223006012372, 223006012373, 223006012374, 223006012375, 223006012376, 223006012377, 223006012378, 223006012379, 223006012380, 223006012381, 223006012382, 223006012383, 223006012384, 223006012385, 223006012386, 223006012387, 223006012388, 223006012389, 223006012390, 223006012391, 223006012392, 223006012393, 223006012394, 223006012395, 223006012396, 223006012397, 223006012398, 223006012399, 223006012400, 223006012401, 223006012402, 223006012403, 223006012404, 223006012405, 223006012406, 223006012407, 223006012408, 223006012409, 223006012410, 223006012411, 223006012412, 223006012413, 223006012414, 223006012415, 223006012416, 223006012417, 223006012418, 223006012419, 223006012420, 223006012421, 223006012422, 223006012423, 223006012424, 223006012425, 223006012426, 223006012427, 223006012428, 223006012429, 223006012430, 223006012431, 223006012432, 223006012433, 223006012434, 223006012435, 223006012436, 223006012437, 223006012438, 223006012439, 223006012440, 223006012441, 223006012442, 223006012443, 223006012444, 223006012445, 223006012446, 223006012447, 223006012448, 223006012449, 223006012450, 223006012451, 223006012452, 223006012453, 223006012454, 223006012455, 223006012456, 223006012457, 223006012458, 223006012459, 223006012460, 223006012461, 223006012462, 223006012463, 223006012464, 223006012465, 223006012466, 223006012467, 223006012468, 223006012469, 223006012470, 223006012471, 223006012472, 223006012473, 223006012474, 223006012475, 223006012476, 223006012477, 223006012478, 223006012479, 223006012480, 223006012481, 223006012482, 223006012483, 223006012484, 223006012485, 223006012486, 223006012487, 223006012488, 223006012489, 223006012490, 223006012491, 223006012492, 223006012493, 223006012494, 223006012495, 223006012496, 223006012497, 223006012498, 223006012499, 223006012500, 223006012501, 223006012502, 223006012503, 223006012504, 223006012505, 223006012506, 223006012507, 223006012508, 223006012509, 223006012510, 223006012511, 223006012512, 223006012513, 223006012514, 223006012515, 223006012516, 223006012517, 223006012518, 223006012519, 223006012520, 223006012521, 223006012522, 223006012523, 223006012524, 223006012525, 223006012526, 223006012527, 223006012528, 223006012529, 223006012530, 223006012531, 223006012532, 223006012533, 223006012534, 223006012535, 223006012536, 223006012537, 223006012538, 223006012539, 223006012540, 223006012541, 223006012542, 223006012543, 223006012544, 223006012545, 223006012546, 223006012547, 223006012548, 223006012549, 223006012550, 223006012551, 223006012552, 223006012553, 223006012554, 223006012555, 223006012556, 223006012557, 223006012558, 223006012559, 223006012560, 223006012561, 223006012562, 223006012563, 223006012564, 223006012565, 223006012566, 223006012567, 223006012568, 223006012569, 223006012570, 223006012571, 223006012572, 223006012573, 223006012574, 223006012575, 223006012576, 223006012577, 223006012578, 223006012579, 223006012580, 223006012581, 223006012582, 223006012583, 223006012584, 223006012585, 223006012586, 223006012587, 223006012588, 223006012589, 223006012590, 223006012591, 223006012592, 223006012593, 223006012594, 223006012595, 223006012596, 223006012597, 223006012598, 223006012599, 223006012600, 223006012601, 223006012602, 223006012603, 223006012604, 223006012605, 223006012606, 223006012607, 223006012608, 223006012609, 223006012610, 223006012611, 223006012612, 223006012613, 223006012614, 223006012615, 223006012616, 223006012617, 223006012618, 223006012619, 223006012620, 223006012621, 223006012622, 223006012623, 223006012624, 223006012625, 223006012626, 223006012627, 223006012628, 223006012629, 223006012630, 223006012631, 223006012632, 223006012633, 223006012634, 223006012635, 223006012636, 223006012637, 223006012638, 223006012639, 223006012640, 223006012641, 223006012642, 223006012643, 223006012644, 223006012645, 223006012646, 223006012647, 223006012648, 223006012649, 223006012650, 223006012651, 223006012652, 223006012653, 223006012654, 223006012655, 223006012656, 223006012657, 223006012658, 223006012659, 223006012660, 223006012661, 223006012662, 223006012663, 223006012664, 223006012665, 223006012666, 223006012667, 223006012668, 223006012669, 223006012670, 223006012671, 223006012672, 223006012673, 223006012674, 223006012675, 223006012676, 223006012677, 223006012678, 223006012679, 223006012680, 223006012681, 223006012682, 223006012683, 223006012684, 223006012685, 223006012686, 223006012687, 223006012688, 223006012689, 223006012690, 223006012691, 223006012692, 223006012693, 223006012694, 223006012695, 223006012696, 223006012697, 223006012698, 223006012699, 223006012700, 223006012701, 223006012702, 223006012703, 223006012704, 223006012705, 223006012706, 223006012707, 223006012708, 223006012709, 223006012710, 223006012711, 223006012712, 223006012713, 223006012714, 223006012715, 223006012716, 223006012717, 223006012718, 223006012719, 223006012720, 223006012721, 223006012722, 223006012723, 223006012724, 223006012725, 223006012726, 223006012727, 223006012728, 223006012729, 223006012730, 223006012731, 223006012732, 223006012733, 223006012734, 223006012735, 223006012736, 223006012737, 223006012738, 223006012739, 223006012740, 223006012741, 223006012742, 223006012743, 223006012744, 223006012745, 223006012746, 223006012747, 223006012748, 223006012749, 223006012750, 223006012751, 223006012752, 223006012753, 223006012754, 223006012755, 223006012756, 223006012757, 223006012758, 223006012759, 223006012760, 223006012761, 223006012762, 223006012763, 223006012764, 223006012765, 223006012766, 223006012767, 223006012768, 223006012769, 223006012770, 223006012771, 223006012772, 223006012773, 223006012774, 223006012775, 223006012776, 223006012777, 223006012778, 223006012779, 223006012780, 223006012781, 223006012782, 223006012783, 223006012784, 223006012785, 223006012786, 223006012787, 223006012788, 223006012789, 223006012790, 223006012791, 223006012792, 223006012793, 223006012794, 223006012795, 223006012796, 223006012797, 223006012798, 223006012799, 223006012800, 223006012801, 223006012802, 223006012803, 223006012804, 223006012805, 223006012806, 223006012807, 223006012808, 223006012809, 223006012810, 223006012811, 223006012812, 223006012813, 223006012814, 223006012815, 223006012816, 223006012817, 223006012818, 223006012819, 223006012820, 223006012821, 223006012822, 223006012823, 223006012824, 223006012825, 223006012826, 223006012827, 223006012828, 223006012829, 223006012830, 223006012831, 223006012832, 223006012833, 223006012834, 223006012835, 223006012836, 223006012837, 223006012838, 223006012839, 223006012840, 223006012841, 223006012842, 223006012843, 223006012844, 223006012845, 223006012846, 223006012847, 223006012848, 223006012849, 223006012850, 223006012851, 223006012852, 223006012853, 223006012854, 223006012855, 223006012856, 223006012857, 223006012858, 223006012859, 223006012860, 223006012861, 223006012862, 223006012863, 223006012864, 223006012865, 223006012866, 223006012867, 223006012868, 223006012869, 223006012870, 223006012871, 223006012872, 223006012873, 223006012874, 223006012875, 223006012876, 223006012877, 223006012878, 223006012879, 223006012880, 223006012881, 223006012882, 223006012883, 223006012884, 223006012885, 223006012886, 223006012887, 223006012888, 223006012889, 223006012890, 223006012891, 223006012892, 223006012893, 223006012894, 223006012895, 223006012896, 223006012897, 223006012898, 223006012899, 223006012900, 223006012901, 223006012902, 223006012903, 223006012904, 223006012905, 223006012906, 223006012907, 223006012908, 223006012909, 223006012910, 223006012911, 223006012912, 223006012913, 223006012914, 223006012915, 223006012916, 223006012917, 223006012918, 223006012919, 223006012920, 223006012921, 223006012922, 223006012923, 223006012924, 223006012925, 223006012926, 223006012927, 223006012928, 223006012929, 223006012930, 223006012931, 223006012932, 223006012933, 223006012934, 223006012935, 223006012936, 223006012937, 223006012938, 223006012939, 223006012940, 223006012941, 223006012942, 223006012943, 223006012944, 223006012945, 223006012946, 223006012947, 223006012948, 223006012949, 223006012950, 223006012951, 223006012952, 223006012953, 223006012954, 223006012955, 223006012956, 223006012957, 223006012958, 223006012959, 223006012960, 223006012961, 223006012962, 223006012963, 223006012964, 223006012965, 223006012966, 223006012967, 223006012968, 223006012969, 223006012970, 223006012971, 223006012972, 223006012973, 223006012974, 223006012975, 223006012976, 223006012977, 223006012978, 223006012979, 223006012980, 223006012981, 223006012982, 223006012983, 223006012984, 223006012985, 223006012986, 223006012987, 223006012988, 223006012989, 223006012990, 223006012991, 223006012992, 223006012993, 223006012994, 223006012995, 223006012996, 223006012997, 223006012998, 223006012999, 223006013000, 223006013001, 223006013002, 223006013003, 223006013004, 223006013005, 223006013006, 223006013007, 223006013008, 223006013009, 223006013010, 223006013011, 223006013012, 223006013013, 223006013014, 223006013015, 223006013016, 223006013017, 223006013018, 223006013019, 223006013020, 223006013021, 223006013022, 223006013023, 223006013024, 223006013025, 223006013026, 223006013027, 223006013028, 223006013029, 223006013030, 223006013031, 223006013032, 223006013033, 223006013034, 223006013035, 223006013036, 223006013037, 223006013038, 223006013039, 223006013040, 223006013041, 223006013042, 223006013043, 223006013044, 223006013045, 223006013046, 223006013047, 223006013048, 223006013049, 223006013050, 223006013051, 223006013052, 223006013053, 223006013054, 223006013055, 223006013056, 223006013057, 223006013058, 223006013059, 223006013060, 223006013061, 223006013062, 223006013063, 223006013064, 223006013065, 223006013066, 223006013067, 223006013068, 223006013069, 223006013070, 223006013071, 223006013072, 223006013073, 223006013074, 223006013075, 223006013076, 223006013077, 223006013078, 223006013079, 223006013080, 223006013081, 223006013082, 223006013083, 223006013084, 223006013085, 223006013086, 223006013087, 223006013088, 223006013089, 223006013090, 223006013091, 223006013092, 223006013093, 223006013094, 223006013095, 223006013096, 223006013097, 223006013098, 223006013099, 223006013100, 223006013101, 223006013102, 223006013103, 223006013104, 223006013105, 223006013106, 223006013107, 223006013108, 223006013109, 223006013110, 223006013111, 223006013112, 223006013113, 223006013114, 223006013115, 223006013116, 223006013117, 223006013118, 223006013119, 223006013120, 223006013121, 223006013122, 223006013123, 223006013124, 223006013125, 223006013126, 223006013127, 223006013128, 223006013129, 223006013130, 223006013131, 223006013132, 223006013133, 223006013134, 223006013135, 223006013136, 223006013137, 223006013138, 223006013139, 223006013140, 223006013141, 223006013142, 223006013143, 223006013144, 223006013145, 223006013146, 223006013147, 223006013148, 223006013149, 223006013150, 223006013151, 223006013152, 223006013153, 223006013154, 223006013155, 223006013156, 223006013157, 223006013158, 223006013159, 223006013160, 223006013161, 223006013162, 223006013163, 223006013164, 223006013165, 223006013166, 223006013167, 223006013168, 223006013169, 223006013170, 223006013171, 223006013172, 223006013173, 223006013174, 223006013175, 223006013176, 223006013177, 223006013178, 223006013179, 223006013180, 223006013181, 223006013182, 223006013183, 223006013184, 223006013185, 223006013186, 223006013187, 223006013188, 223006013189, 223006013190, 223006013191, 223006013192, 223006013193, 223006013194, 223006013195, 223006013196, 223006013197, 223006013198, 223006013199, 223006013200, 223006013201, 223006013202, 223006013203, 223006013204, 223006013205, 223006013206, 223006013207, 223006013208, 223006013209, 223006013210, 223006013211, 223006013212, 223006013213, 223006013214, 223006013215, 223006013216, 223006013217, 223006013218, 223006013219, 223006013220, 223006013221, 223006013222, 223006013223, 223006013224, 223006013225, 223006013226, 223006013227, 223006013228, 223006013229, 223006013230, 223006013231, 223006013232, 223006013233, 223006013234, 223006013235, 223006013236, 223006013237, 223006013238, 223006013239, 223006013240, 223006013241, 223006013242, 223006013243, 223006013244, 223006013245, 223006013246, 223006013247, 223006013248, 223006013249, 223006013250, 223006013251, 223006013252, 223006013253, 223006013254, 223006013255, 223006013256, 223006013257, 223006013258, 223006013259, 223006013260, 223006013261, 223006013262, 223006013263, 223006013264, 223006013265, 223006013266, 223006013267, 223006013268, 223006013269, 223006013270, 223006013271, 223006013272, 223006013273, 223006013274, 223006013275, 223006013276, 223006013277, 223006013278, 223006013279, 223006013280, 223006013281, 223006013282, 223006013283, 223006013284, 223006013285, 223006013286, 223006013287, 223006013288
    );


    $name = $name_list[array_rand($name_list)];
    $surname = $surname_list[array_rand($surname_list)];
    $tel = $tel_list[array_rand($tel_list)];

    echo "<br>";
    $sql = "INSERT INTO rehberimtable (firstname, lastname, Telefon_numarasi) VALUES ('$name', '$surname', $tel)";

    if ($conn->query($sql) === TRUE) {
        echo $sql;
    } else {
?>
        <script>
            alert("Hata Var!!!")
        </script>
        <br>
<?php
    }
    $conn->close();
}

$a = 1;
while ($a <= 200) {
    tekrarla();
    $a++;
}
echo '<script>alert("Başaryla eklendi")</script>';
header('Location: index.php');
?>