-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 05:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myrealestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `address` text NOT NULL,
  `price` text NOT NULL,
  `bedroom` text NOT NULL,
  `bathroom` text NOT NULL,
  `description` text NOT NULL,
  `refrence_no` text NOT NULL,
  `pic_1` text NOT NULL,
  `pic_2` text NOT NULL,
  `pic_3` text NOT NULL,
  `pic_4` text NOT NULL,
  `pic_5` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title`, `address`, `price`, `bedroom`, `bathroom`, `description`, `refrence_no`, `pic_1`, `pic_2`, `pic_3`, `pic_4`, `pic_5`, `user_id`, `status`) VALUES
(26, '3 Bedroom Semi-Detached House', '88 Brudenell Road, Leeds, LS6 1JD', '325000', '3', '4', '<p>This perfectly presented and spacious three bedroom property is located in the sought after Galwally Park close to the bustling Ormeau Road with its extensive range of restaurants, cafes, entertainment facilities and main transport links into and out of the city as well as the popular Forestside Retail Park and both Stranmillis and Queens University. The property has many period features and character throughout and has been updated by the current owner including new condensing boiler, double glazing, loft insulation and insulated plasterboard in the kitchen,bathroom and third bedroom leaving you with nothing more to do than to move in!\nDownstairs comprises of entrance porch, hallway with wood panelled walls and under stairs WC, spacious and bright living area with feature fireplace and bay window open to dining area and galley style kitchen with American oak units and built in appliances. Upstairs there are three bedrooms, two of which are doubles, modern family bathroom and separate shower room, perfect for the morning rush! Outside there are private gardens to the front with ample car parking and access to garage/store and to the rear are raised terraced gardens with lawn area and mature trees and shrub, paved patio and utility shed.</p>\n\n\n</p>We expect a high level of interest at this property due to its sought after location and comfortable and modern living space. </p>', '68682819', '25_1.PNG', '25_2.PNG', '25_3.PNG', '25_4.PNG', '25_5.PNG', 1, 1),
(28, '1 Bedroom Maisonette ', '20 Eastgate, Leeds, LS2 7SH', '120000', '1', '1', '<p>Offered for sale with no onward chain is this purpose built one bedroom first floor maisonette, the accommodation includes entrance hall, reception room, kitchen, bedroom and bathroom. Other benefits include allocated parking, private loft area and a 145 year lease.</p>\r\n\r\n<p>Entrance Hall - Entrance door, Stairs to first floor.</p>\r\n\r\n<p>Landing - Double glazed window to side, carpet, electric storage heater, cupboard, loft access.</p>\r\n\r\n<p>Reception Room - 4.75m x 3.43m (15\'7 x 11\'3) - Three double glazed windows to side, carpet, electric storage heater.</p>\r\n\r\n<p>Kitchen - 2.46m x 1.57m (8\'1 x 5\'2) - Double glazed window to side, tiled flooring, stainless steel single drainer sink, electric cooker point, plumbing for washing machine, wall and base units, part tiled walls, space for fridge freezer.</p>\r\n\r\n<p>Bedroom - 6.10m x 3.07m at max (20\' x 10\'1 at max) - Double glazed window to side, carpet, electric storage heater, built in cupboard.</p>\r\n\r\n<p>Bathroom - Frosted double glazed window to side, low level WC, paneled bath, vanity wash hand basin, heated towel rail, tiled walls and floor.</p>\r\n\r\n<p>Parking - One allocated parking space.</p>', '79715344', '27_1.PNG', '27_2.PNG', '27_3.PNG', '27_4.PNG', '27_5.PNG', 1, 1),
(29, '4 Bedroom Detached House ', '45 Brunswick Terrace, Leeds, LS2 9NH', '360000', '4', '4', '<p>An excellent opportunity to acquire this individually designed detached family home offering well proportioned accommodation and in our opinion offers further scope for extension subject to obtaining the necessary planning consent. The accommodation comprises a spacious reception entrance hall, ground floor cloakroom/shower room, large lounge/diner, L-shaped fitted kitchen, utility room, separate sitting room/study (currently used as bedroom) and to the first floor galleried landing master bedroom with dressing room (originally fourth bedroom), two further bedrooms and main family bathroom. In our opinion the property stands on a good size plot and benefits from sweep in/out driveway leading to garaging measuring approximately 32â€™5 x 8â€™7. The property is situated approximately half a mile to Collier Row town centre and a mile and a half to Romford town centre providing comprehensive shopping facilities and mainline station pending Crossrail services. </p>', '75988585', '28_1.PNG', '28_2.PNG', '28_3.PNG', '28_4.PNG', '28_5.PNG', 1, 1),
(33, '4 bedrooms Apartment', '10 Oxted Gardens, London, N4 2TB', '650000', '4', '4', 'You will fall in love with the fabulous estate home in Champions Bend Estates. This wonderful custom home offers amazing entertaining spaces throughout. Your guest will be impressed from the moment they enter with a soaring archway and architectural details throughout. The kitchen is open to den and breakfast and has lovely Quartz counter tops and two pantries. The master is down with a spacious en-suite.', '88788267', '3872921.jpg', '3661568.jpg', '4571553.jpg', '3407280.jpg', '3357112.jpg', 1, 1),
(34, ' 4 bedroom Single family residence', '42 Roding Lane North, Woodford Green, IG8 8EU', '379000', '4', '3', 'Welcome home to 11611 Parkriver Drive! This beautiful 2,738 sqft 2-story home boasts 4 bedrooms, 3 bathrooms, and features a ton of beautiful upgrades! You will love all the incredible features this home has to offer, including a gorgeous entry, wood and tile flooring, granite countertops, stainless steel appliances, a backyard oasis and so much more! This home has an amazing location on a 9,775 sqft lot in the community of Lakewood Forest', '56752799', '2062498.jpg', '4763359.jpg', '6309029.jpg', '5324736.jpg', '6058361.jpg', 1, 1),
(35, 'Single family residence 3 bedrooms', '68 Westfield Avenue, Ealing, W13 9JL', '439900', '3', '2', 'PERRY HOMES NEW CONSTRUCTION - Home office with French doors set at entry with 11-foot ceiling. Open kitchen offers center island and corner walk-in pantry. Dining area is adjacent to open family room with wall of windows. Spacious primary suite. Dual vanities, garden tub, separate glass-enclosed shower and large walk-in closet in primary bath. Secondary bedrooms include walk-in closets. Covered backyard patio. Mud room off two-car garage.', '10003253', '5371365.jpg', '1674840.jpg', '8004931.jpg', '3170522.jpg', '7922022.jpg', 1, 1),
(38, 'Single family residence 3 bedrooms', '66 Chelsea Gardens, London, SW10 0XD', '359900', '3', '3', 'Welcome Home to 1470 Summergate - New Construction Open the front door of this home to a welcoming foyer that flows into a beautiful living space. The great room is anchored by a gas fireplace and custom built-ins. While the sizable kitchen is designed with a space for dining, a walk-in pantry, and also boasts an extended island to accommodate bar stools for additional seating. On the main level, you will also find a flex space that is perfect for working from home.', '53528409', '6753959.jpg', '4095290.jpg', '2894872.jpg', '3386918.jpg', '2753953.jpg', 1, 1),
(39, 'Single family residence 3 bedrooms', '50 Northumberland Road, London', '372563', '3', '3', 'The Edinburgh C3-SL.  New construction by Great Southern Homes.  Energy and Cost efficient home has granite countertops, Tuxedo Touch home automation system, auto docking system w/speakers, music port & USB charging ports. This home features Rinnai Tankless water heater with Whirlpool appliances (dishwasher, microwave & smooth top range.  A few of the upgrades in this home include covered porch, sprinkler system, fireplace, LVT in living areas, tile shower in owner suite, deluxe kitchen and wall bench', '41467310', '8169572.jpg', '6875639.jpg', '7568566.jpg', '1182259.jpg', '8944823.jpg', 1, 1),
(40, '1 bedroom Duplex', 'bolton,UK', '800', '9', '7', 'hjgjgj', '51734678', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `profile_picture` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email_address` text NOT NULL,
  `phone_number` text NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_picture`, `first_name`, `last_name`, `email_address`, `phone_number`, `address`, `password`) VALUES
(1, '17129209231966.jpg', 'Chrysanthus', 'Chiagwah', 'chrys@gmail.com', '09088776650', 'bolton,UK', '$2y$10$Bflqf5EzXl8CH1RntSCc.uzVR0T2KoABSyXFBZ3.R4qjjv5hKQb7m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
