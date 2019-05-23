-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2019 at 03:15 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `id` int(11) NOT NULL,
  `disease_name` varchar(255) NOT NULL,
  `symptom` varchar(255) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `precaution` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`id`, `disease_name`, `symptom`, `medicine`, `precaution`) VALUES
(1, 'Anemia', 'Shortness of breath | Fatigue | Decreased energy | Dizziness | Palpitations', 'Hepatoglobine liquid, Zelfol A Capsule, Dexorange Capsule', 'Eat plenty of iron-rich foods, such as tofu, green and leafy vegetables, lean red meat, lentils, beans and iron-fortified cereals and breads. Avoid drinking tea or coffee with your meals, as they can affect iron absorption. Get enough vitamin B12 and folic acid in your diet.'),
(2, 'Colds and the Flu', 'Sneezing | Headache | Sore throat | Runny or stuffy nose.', 'Advil, Tylenol, Sudafed, Benadryl Allergy Plus Congestion.', 'Wash your hands often-washing your hands for at least 20 seconds can help protect you from getting sick. Keep household surfaces clean. Use paper towels. Use disposable items if a family member is infected.'),
(3, 'Breast Cancer', 'A lump in the breast | dimpling or puckering of the skin of the breast |\r\n nipple turned inward toward the breast | discharge from the nipple.', 'Dr.Johns Breast Guard Drop, Bhargava Tumorin Drop, Adel 48 Itires Drop', 'Avoid Birth Control Pills, Particularly After Age 35 or If You Smoke. Donâ€™t Smoke. Avoid Post-Menopausal Hormones. Eat Your Fruits & Vegetables â€“ and Avoid Too Much Alcohol.'),
(4, 'Whooping Cough', 'Low Fever | mild cough |runny nose| dry or sore throat | apnea-which is a pause in breathing or shallow breathing often during sleep', 'Ambrodil Syrup, Looz Solution, Torex Cough Syrup', 'Drink plenty of fluids and eat healthy to build immunity. Keep your distance from people to prevent spreading cough. Wash your hands often with soap to avoid infection. '),
(5, 'Diarrhea', 'Abdominal pain | urgency to go to the toilet | vomiting | nausea.', 'Imodium, Amicolon Capsule, Bifilac Capsule', 'Eat bland, easily digested foods, for example, the BRAT diet: Bananas, Rice, Applesauce, Toast. Drink boil water or purified water.'),
(8, 'Asthma', 'Shortness of breath | Chest tightness | Difficulty breathing.', 'Albuterol, Levalbuterol, Metaproterenol.', 'Wear a mask and gloves when cleaning, vacuuming, or painting to limit dust and chemical exposure. Don\'t allow smoking in your house. Wash all bedding in hot water once a week.'),
(9, 'Chickenpox', 'Fever | Tiredness | Loss of appetite | Headache.', 'Acyclovir, Analgesic, Antihistamine.', 'Vaccination in children, Vaccination in adults.'),
(10, 'Acne', 'Whiteheads | Small red | tender bumps |  Pimples.', 'Benzoyl peroxide, D Acne Gel, Acne star gel', 'Wash the face twice daily. Refrain from harsh scrubbing. Keep hair clean. Refrain from popping or picking at pimples.'),
(11, 'Eczema', 'Dry sensitive skin | Very bad itching | Red inflamed skin | Rough leathery or scaly patches of skin.', 'Propygenta NF Cream, Innisfree Derma Formula Skin Barrier Cream, New Life Eczederm Drop.', 'Moisturize your skin. Use a humidifier. Avoid scratching. Learn to manage your stress.'),
(12, 'Cold sore', 'Tingling and itching | Blisters | Oozing and crusting.', 'Hydroheal Am Gel, Metrohex Gel, Venorich Tablet.', 'Don\'t kiss people, especially children. Avoid other intimate contact. Don\'t share personal items like lip balm, towels, or razors. Don\'t share beverages or food.'),
(13, 'Measles', ' Dry cough | Runny nose | Sore throat | Inflamed eyes.', 'Immune serum globulin, Post-exposure vaccination.', 'Vitamin C supplementation is one viable option for measles prevention. Getting enough vitamin D can also help fight infections and strengthen your immune system.'),
(14, 'Pneumonia', 'High fever up to 105 F | Coughing out greenish | yellow | or bloody mucus, Chills that make you shake, Feeling very tired.', 'H influenzae, H parainfluenzae, Klebsiella pneumoniae.', 'Hand hygiene, Use of personal protective equipment, Safe handling of potentially contaminated equipment or surfaces in the patient environment.'),
(15, 'Jaundice', 'Fatigue | Abdominal pain | Vomiting | Pale stools | Dark urine.', 'Chemotherapy/radiation therapy, IV fluids in cases of dehydration, Steroids.', 'Milk thistle. Water-drinking at least eight glasses of water a day helps your liver flush out toxins. Coffee or herbal tea-Moderate coffee consumption has been shown to improve liver health by reducing.'),
(16, 'Dysentery', 'Abdominal pain | Fever and chills | Nausea and vomiting | Fatigue.', 'Metronidazole, Oral rehydration therapy.', 'Washing your hands with soap and warm water after using the toilet and regularly throughout the day. Avoiding sharing towels. Washing your hands before handling, eating or cooking food.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('male','female','','') NOT NULL,
  `mobile` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `sq` varchar(100) NOT NULL,
  `sa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `gender`, `mobile`, `pass`, `sq`, `sa`) VALUES
(1, 'rs', 'chauhan', 'r@rs.com', 'male', 0, '123', 'What is Your old Phone Number', '77'),
(2, 'Satyam', 'Prakash', 'a@gmail.com', 'male', 2147483647, '12345678', 'What is your Birthdate?', '31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
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
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
