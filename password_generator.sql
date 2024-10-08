-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2024 at 11:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `password_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_history`
--

CREATE TABLE `password_history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `session_token` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_history`
--

INSERT INTO `password_history` (`id`, `user_id`, `session_token`, `password`, `created_at`) VALUES
(48, 2, NULL, 'dllWOTVvNmdzdWxSTXVxcVo5STZ3Zz09Ojrr6PwtbvpYKeOPfQCHttPC', '2024-08-16 11:20:47'),
(64, NULL, '3161ee7ee57e81d508f94c14d4adbcc4c71654c2e815f21916d24936b5a3cef4', 'eHFDWFlOOW9kM0dNejkzb0hOQUQxZz09Ojq51SyT3F75acXdj7XCB8lz', '2024-08-29 10:05:53'),
(67, 5, NULL, 'SGdHYXBYRnhWQmhDbVZ0anE5SjUyQT09OjoJfqUFPz9K4xdZgqEFZ6s3', '2024-08-30 10:24:10'),
(68, 5, NULL, 'azFldzJRYkpEZC95Z0NHbEhLTlZ0QT09OjrrxyJmUu6t81bF7vJuA2Sn', '2024-08-30 10:24:11'),
(69, 5, NULL, 'UTI3RDJoa054L0xXUi83TlRUYkdrQT09Ojrh01lw94Lhbs7WoeGc/ZGe', '2024-08-30 10:24:12'),
(70, 5, NULL, 'YmRSUGNhSWJvenZlV1FIMEc2QnZRUT09OjqMyYjMJczULkgtKaENhtfE', '2024-08-30 10:24:13'),
(71, 5, NULL, 'TlNCSGIxUkhUdnlKcUt3aWp6WVVGQT09OjqmUAiVql+GNdQ6CQTXE0hq', '2024-08-30 10:24:13'),
(72, 5, NULL, 'Nk1LT1dCSlNhaE9kM1FWMjBWcll4UT09OjpPO/VzSjkNFOZ9wUjwdS70', '2024-08-30 10:24:13'),
(73, 5, NULL, 'ZmVHZUJuWmNtRUN1a3o0T2dRR05QQT09Ojp4B2nP7BGJbprcmGUzq2mH', '2024-08-30 10:24:14'),
(74, 5, NULL, 'SzNDQXZaWHJPNStiaUVMaTB2UkJSZz09OjqjBBQWt17xcGdEwkR2abNf', '2024-08-30 10:24:14'),
(75, 5, NULL, 'ZHVxLzdCZ3YyU1pxRFliQ29ld2VXQT09OjrbIh3yZ1MZ1NR0lcWLGs3V', '2024-08-30 10:29:29'),
(76, 5, NULL, 'WjJDSDF5aGlmd1NHeVRVZGM2RE5KUT09OjqZqJc9cGPYVpy5dd8jAns5', '2024-08-30 10:29:30'),
(77, 5, NULL, 'YTl4U1JQeUlud2dzcHRlUnRRRllZUT09Ojo4hGluOCUZHNZCAQ7ndc5A', '2024-08-30 10:43:49'),
(78, 5, NULL, 'Z3VTenhtZC9HanZybEgzdkxKN3MvZz09Ojr9+x1HAPmq3j3ZKCwshSns', '2024-08-30 10:45:16'),
(84, NULL, 'c1832a7b7789eefdfb1f1c8fcc3ef8194fc9f224059029571d13b31c5a212b91', 'Wm9TNUdiWjRuVHNTcUs1U1l5Vk9MUT09Ojq/JPcOyG+T6EEE9RN33htf', '2024-09-07 05:47:32'),
(85, NULL, 'c1832a7b7789eefdfb1f1c8fcc3ef8194fc9f224059029571d13b31c5a212b91', 'ZUxQTTErMDFXR0YvZnIzNDRFOUNkdz09Ojrl5uQ7412Qn4kpiuWebBtP', '2024-09-07 05:47:33'),
(86, NULL, 'c1832a7b7789eefdfb1f1c8fcc3ef8194fc9f224059029571d13b31c5a212b91', 'cC9aZWN0MDlIdDIzQkd1dWc4UHlMM1hNYXpTOUlHczdlSHozekV4eUVxcz06OrdI2t06AJVuOqULv7j7Jxc=', '2024-09-07 05:47:47'),
(122, 9, NULL, 'SEpmdk03dXJqbzYzQUQxNnE0Wmdrdz09Ojq199ir7tpopMcGStgDJFK5', '2024-09-07 09:05:42'),
(123, 9, NULL, 'U1dVZnhkWURqZ0hsTlhSZ1NxMTdCQT09OjqGgE+s3WJwRj1Jy7ku7o3G', '2024-09-07 09:05:44'),
(148, NULL, '37d139eb829ad878a3b9ded83d08e7984e3cefee9e3180f7faf8b3efe1761d3c', 'UFBnQ29hRnRZODdaWmY5TWdmcDdkdz09OjoiH+fBi3xw9RSXRCJrFzzG', '2024-09-07 18:07:20'),
(149, NULL, '37d139eb829ad878a3b9ded83d08e7984e3cefee9e3180f7faf8b3efe1761d3c', 'VWZKYzUweE1kZzBKSmM4SjZXd1lqQT09OjoXdWQpQv2VxBeiavvxj0z2', '2024-09-07 18:07:21'),
(150, NULL, '7ba60aa513cb27e501f2052aeac7314e1716554764758fd860a38d995b13c828', 'cDRkaFIybW1hSGFZOHFKOTF1WS9LQT09OjqxHy98Pu96mYsaE51JPUEq', '2024-09-08 02:41:36'),
(151, NULL, '7ba60aa513cb27e501f2052aeac7314e1716554764758fd860a38d995b13c828', 'djFQMEdJSFptTVZiaGZFNVg5bTY2UT09OjqYa89vCpyzQsiXng4Wj6hm', '2024-09-08 02:41:37'),
(152, NULL, '7ba60aa513cb27e501f2052aeac7314e1716554764758fd860a38d995b13c828', 'bFI5Ni9NMXNRS3ZoMXZERndpS01qdz09Ojq+bVtqWaUqe4hsz4/QaxbF', '2024-09-08 02:41:37'),
(153, NULL, '23b937159460c01c68c3dcd6989ef4c168e175ff84bd16e0ebf928f12c05ac1f', 'cWt4NzRKekxqdFAxbTF4SXFKWG12dnZhUFhxWXR0b1dDMk5BMjhWQ3ZQST06OskznoO5cqUe8Fjxf5CxOHA=', '2024-09-08 03:40:21'),
(154, NULL, '23b937159460c01c68c3dcd6989ef4c168e175ff84bd16e0ebf928f12c05ac1f', 'bWZIUlpBZzZXSFJlWmo5MFgrZGZxQT09Ojralzx5+2wzdHXaeNSJLa0k', '2024-09-08 03:40:55'),
(155, NULL, '23b937159460c01c68c3dcd6989ef4c168e175ff84bd16e0ebf928f12c05ac1f', 'NGZxRThxU1paWXVKRFRYVFVLTEx4QT09Ojq8MZy8F7XYU4CRiinKhTU2', '2024-09-08 03:41:00'),
(156, NULL, '23b937159460c01c68c3dcd6989ef4c168e175ff84bd16e0ebf928f12c05ac1f', 'UFV6UkdvODJpbkxjNXg0OHI0SmxGZz09OjrLlQP72lp5RFuXU9nLlz5J', '2024-09-08 03:41:02'),
(157, NULL, '23b937159460c01c68c3dcd6989ef4c168e175ff84bd16e0ebf928f12c05ac1f', 'Q1JnZ1NOcTd4YTRtTSt4VEFSR3I1dz09Ojp4U1Z39Likp/LE9zh/eWhS', '2024-09-08 03:41:05'),
(158, NULL, '7948048ef08b6e39c5b8ebbcda873337883727cdb49f8a11511870b1f8bb4ad1', 'OGJFUER4aTA1WXcyU3RPZ2F2YjBQUT09OjqYFhnt2hZzg3Gc4RyiC5GF', '2024-09-08 03:45:05'),
(159, NULL, '7948048ef08b6e39c5b8ebbcda873337883727cdb49f8a11511870b1f8bb4ad1', 'MkdkYU5ETE1DRUVjQk5TaEJvLzl6dz09OjpywvDx1tMXCLsTnHa587WV', '2024-09-08 03:45:06'),
(160, NULL, '7948048ef08b6e39c5b8ebbcda873337883727cdb49f8a11511870b1f8bb4ad1', 'cUI2SXV3YjQ5VHB3UHVlaUxsQ3Z2Nm5yVlFPaDdtNDZtRytNVHRBYWd1az06OqtfomNUS4GL3RafaAOxV6E=', '2024-09-08 03:45:09'),
(161, NULL, '7948048ef08b6e39c5b8ebbcda873337883727cdb49f8a11511870b1f8bb4ad1', 'YTZqWk41UjViTGdzeVFtZHZwU2VqWHlGcS9HRlVRcjN0a1c5bXN3Z2pCWT06Otkix1R4PCs2cZmGAnyF+EM=', '2024-09-08 03:45:14'),
(162, NULL, '7948048ef08b6e39c5b8ebbcda873337883727cdb49f8a11511870b1f8bb4ad1', 'VWFWKzgyd25FRnNuYTRBRWZhKzFPOFlhL1EzVDF2SzBjMHRha2F1LzkwTT06Or+uvkAVogWlLp0VgPb5llY=', '2024-09-08 03:45:21'),
(163, 10, NULL, 'NlV2a0w5MzUvQUNMdVpmWVJzNlgwZz09OjqAnjJ3DOEMo0wcjyyf4Jme', '2024-09-08 03:46:17'),
(164, 10, NULL, 'UXN3ZU5wZEhndzRvVWJDeTdMaXVzQT09OjqGG6DlRYb6bdfA/CZYxbzK', '2024-09-08 03:46:19'),
(165, NULL, 'e2b5a0fb39ceb6715a0253d5b9e6808dabf10c2c4d2976482ebeaf878c22e8d6', 'eTJCOVEyaTcyWEhWcGNXRkMzRHFEZz09Ojplqhgauq0gEeiRkq0GXqpl', '2024-09-08 04:27:45'),
(166, NULL, 'e2b5a0fb39ceb6715a0253d5b9e6808dabf10c2c4d2976482ebeaf878c22e8d6', 'aURkbDFKbW1lL3hDd29lNlVndkM5TkpjK1cwODAvSFVRM1JEV2dib1pKcz06OnZFUTVrtDYLDgnVWEccSo4=', '2024-09-08 04:27:47'),
(211, NULL, '76109065f7ede936e863ce1974e21a6aadbafd7cef28e37dac8f116067cd1fef', 'N3NiS01aV2xJU3BCbVV2SGRPcDZOUT09Ojomk+vSiGqOJFqQy4eO2lbk', '2024-09-08 06:32:39'),
(212, NULL, '76109065f7ede936e863ce1974e21a6aadbafd7cef28e37dac8f116067cd1fef', 'UUJUVmxrKzdmY0djdjNSZjNzWEhwUT09OjptnJD1af4WeKrs8n3ZXSSw', '2024-09-08 06:32:40'),
(249, NULL, 'b6e0956024abdc9666df83ceb49e9cb36052f386bfcf8e5c3a7287d69482cadf', 'Z3hYSXlJR2R3b0xnOHJ4d3hDUnZOZz09OjqROnXdwMc/0Oxjy/E2Uwr5', '2024-09-08 07:08:39'),
(250, NULL, 'b6e0956024abdc9666df83ceb49e9cb36052f386bfcf8e5c3a7287d69482cadf', 'dXRPVFN4ZmI2cDBXRDZJdytrUzd4dz09OjqtVqzyTHS9C85NcaupjPW6', '2024-09-08 07:08:40'),
(251, NULL, 'b6e0956024abdc9666df83ceb49e9cb36052f386bfcf8e5c3a7287d69482cadf', 'aGxhUXE1MUwrTC9tcVAzbjFwNmhNQT09Ojr72C1UYiW+kQZxVBWqpsCP', '2024-09-08 07:11:53'),
(252, NULL, 'b6e0956024abdc9666df83ceb49e9cb36052f386bfcf8e5c3a7287d69482cadf', 'MHJCeEFWYWxVT1ltQ004RVEwUnRrQT09OjogoEqZFowakH7yej7BazR4', '2024-09-08 07:11:53'),
(320, NULL, '872451c0319543ff93be7b64a3ccb6afd3a6f69fd996f20cf76b29ebb4b1c299', 'V1JlU1V6N3Fxa1c5TWN5NHp3UGZQdmF5WHNzL2VOL1NXMTBkVU9TWnZ3Yz06OsIgTltzBNSGe8prCCooKGo=', '2024-09-08 08:30:31'),
(321, NULL, '872451c0319543ff93be7b64a3ccb6afd3a6f69fd996f20cf76b29ebb4b1c299', 'anFxU1NzNVpQRldERzBpUnlqVnpoWmNoa0VLbEdjdWMyaGFHeG5kdXhCbz06OtVhzcksEGPxQjVaXfSP0t0=', '2024-09-08 08:30:33'),
(322, NULL, '872451c0319543ff93be7b64a3ccb6afd3a6f69fd996f20cf76b29ebb4b1c299', 'Z1lGd01YNzRMYjZoeHJSejM3Vzd3K1p5Nkp6L2p0Y1NPdlFZdm5HelVWYz06Oofwq+c5rVEnRLqPh3rPJNs=', '2024-09-08 08:30:51'),
(324, NULL, 'aab015f98f99825bece34da954e6840499e51e2c8edc0f9ea62131a722db79e0', 'TmFINDNUWXpBQWR1YURhRU5lZHljQT09OjpY6suz/+cc3VqLYzjNNskB', '2024-09-08 08:53:05'),
(325, NULL, 'aab015f98f99825bece34da954e6840499e51e2c8edc0f9ea62131a722db79e0', 'U1haZGtFNWUwbTlsdldYeVJXTXhwZz09OjqSLDHQC5ORHZ0UcRG34EPF', '2024-09-08 08:53:06'),
(333, 6, NULL, 'MXduVUQrY0NBQlJTZlRnVXFlVUxLZz09OjrNlSqaYfIR/YdKqBlCs7+k', '2024-09-08 09:16:37'),
(334, 6, NULL, 'cUYzVUJSV2RqaTltQlVqTlF4bkpJUT09Ojr0lb7qLFya1DVk2K4rxmF8', '2024-09-08 09:23:27'),
(336, 6, NULL, 'aUJUOG81b21sRlVTK1BrenZjakJDQT09OjqYuCoDuKcVvG39199moUnv', '2024-09-08 09:29:33'),
(338, 6, NULL, 'ZnN1bG1OQldzVTU5MVRFOU5abnlRQT09OjoFGG3GD+y09Xp4AAr5UTn5', '2024-09-08 09:29:43'),
(343, 6, NULL, 'YXhQTnBXN3UwUXNPRnMwM3g0MkM3Zz09Ojp5AW+pimOyrh2WjKzlf07W', '2024-09-08 09:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password_hash`, `created_at`, `email`) VALUES
(2, 'asaw', '$2y$10$OKQFAzTaUDNPlRaBf1627eyO6UMb8nmH2qzvtYqBwb4NvOP5XjTxy', '2024-08-15 05:32:29', 'asaw@gmail.com'),
(3, 'Kiara', '$2y$10$5r96NmGLpHsKh3fJEP7pjOreZYrjH25VFiGDRkbP.gZPQkywdV/Fm', '2024-08-29 10:06:26', 'kiara@gmail.com'),
(5, 'Grace', '$2y$10$hP.hNqwjpPt4ozCK072nk.d7BlaImUGmkHjqzciIjQ1jjNzv6j4hO', '2024-08-30 10:23:25', 'grace@gmail.com'),
(6, 'Test', '$2y$10$VvclfzwLV97/Wl2v3ZG5s.JFdg/pP1NObEtx983Dzb4STs1aEv5/i', '2024-09-07 07:41:28', 'test@gmail.com'),
(9, 'dev', '$2y$10$c62XCbQJGhyv2CGoawTaQutXiNt8rh26oFrNxP4ZLF8UEmmr75R3i', '2024-09-07 08:08:02', 'dev@gmail.com'),
(10, 'Goyia', '$2y$10$VWP7Cj3wYc7Sn4qgQPg3R.BawcuDJrg2tFfGG1i22t7EClR44tK8q', '2024-09-08 03:46:06', 'goyia@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_history`
--
ALTER TABLE `password_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_history`
--
ALTER TABLE `password_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `password_history`
--
ALTER TABLE `password_history`
  ADD CONSTRAINT `password_history_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
