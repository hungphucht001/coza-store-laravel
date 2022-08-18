/*
 Navicat Premium Data Transfer

 Source Server         : mysql_wsl
 Source Server Type    : MySQL
 Source Server Version : 80030
 Source Host           : localhost:3306
 Source Schema         : shop_demo

 Target Server Type    : MySQL
 Target Server Version : 80030
 File Encoding         : 65001

 Date: 17/08/2022 02:01:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for colors
-- ----------------------------
DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `colors_product_id_foreign`(`product_id` ASC) USING BTREE,
  CONSTRAINT `colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of colors
-- ----------------------------
INSERT INTO `colors` VALUES (6, 24, 'White', '2022-08-14 03:33:33', '2022-08-14 03:33:33');
INSERT INTO `colors` VALUES (7, 25, 'White', '2022-08-14 03:34:45', '2022-08-14 03:34:45');
INSERT INTO `colors` VALUES (8, 26, 'Blue', '2022-08-14 03:36:01', '2022-08-14 03:36:01');
INSERT INTO `colors` VALUES (9, 27, 'Brown', '2022-08-14 03:39:19', '2022-08-14 03:39:19');
INSERT INTO `colors` VALUES (10, 28, 'Gray', '2022-08-14 03:40:07', '2022-08-14 03:40:07');
INSERT INTO `colors` VALUES (11, 29, 'Black', '2022-08-14 03:45:58', '2022-08-14 03:45:58');
INSERT INTO `colors` VALUES (12, 30, 'Gray', '2022-08-14 07:46:39', '2022-08-14 07:46:39');
INSERT INTO `colors` VALUES (13, 31, 'White', '2022-08-14 07:47:33', '2022-08-14 07:47:33');
INSERT INTO `colors` VALUES (14, 32, 'Black', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `colors` VALUES (15, 33, 'Black', '2022-08-14 07:49:25', '2022-08-14 07:49:25');
INSERT INTO `colors` VALUES (16, 34, 'Blue', '2022-08-14 07:50:21', '2022-08-14 07:50:21');
INSERT INTO `colors` VALUES (17, 35, 'Brown', '2022-08-14 07:53:35', '2022-08-14 07:53:35');
INSERT INTO `colors` VALUES (18, 36, 'White', '2022-08-14 07:54:27', '2022-08-14 07:54:27');
INSERT INTO `colors` VALUES (19, 37, 'Black', '2022-08-14 07:56:21', '2022-08-14 07:56:21');
INSERT INTO `colors` VALUES (20, 38, 'Black', '2022-08-14 07:57:14', '2022-08-14 07:57:14');
INSERT INTO `colors` VALUES (21, 39, 'Gray', '2022-08-14 07:58:07', '2022-08-14 07:58:07');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `thumb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of images
-- ----------------------------
INSERT INTO `images` VALUES (19, 21, '1660278537_MzSbPDxRz4X3YhL.jpg', NULL, '2022-08-12 04:28:57', '2022-08-12 04:28:57');
INSERT INTO `images` VALUES (20, 21, '1660278537_aicfaXaIy2bIaGU.jpg', NULL, '2022-08-12 04:28:57', '2022-08-12 04:28:57');
INSERT INTO `images` VALUES (21, 21, '1660278537_AloYexhdEszt6M9.jpg', NULL, '2022-08-12 04:28:57', '2022-08-12 04:28:57');
INSERT INTO `images` VALUES (22, 21, '1660278537_chyxLVJZHgarxU5.jpg', NULL, '2022-08-12 04:28:57', '2022-08-12 04:28:57');
INSERT INTO `images` VALUES (23, 23, '1660404751_ejnrjM9rfZnD7UR.png', NULL, '2022-08-13 15:32:31', '2022-08-13 15:32:31');
INSERT INTO `images` VALUES (24, 24, '1660448013_Pq7zTVxnpegVxEr.jpg', NULL, '2022-08-14 03:33:33', '2022-08-14 03:33:33');
INSERT INTO `images` VALUES (25, 25, '1660448085_Kqcl1Xfj2F4tngP.jpg', NULL, '2022-08-14 03:34:45', '2022-08-14 03:34:45');
INSERT INTO `images` VALUES (26, 26, '1660448161_gN41VnM5EZnz1AK.jpg', NULL, '2022-08-14 03:36:01', '2022-08-14 03:36:01');
INSERT INTO `images` VALUES (27, 27, '1660448359_FCzIc9TfwxMjnpq.jpg', NULL, '2022-08-14 03:39:19', '2022-08-14 03:39:19');
INSERT INTO `images` VALUES (28, 28, '1660448407_7APuF8Gl4EOeIfP.jpg', NULL, '2022-08-14 03:40:07', '2022-08-14 03:40:07');
INSERT INTO `images` VALUES (29, 29, '1660448758_hTkEELpqMESYTZC.jpg', NULL, '2022-08-14 03:45:58', '2022-08-14 03:45:58');
INSERT INTO `images` VALUES (30, 30, '1660463199_QtNCGsSASgevB6w.jpg', NULL, '2022-08-14 07:46:39', '2022-08-14 07:46:39');
INSERT INTO `images` VALUES (31, 31, '1660463253_2v3SFoYb3cD0M3o.jpg', NULL, '2022-08-14 07:47:33', '2022-08-14 07:47:33');
INSERT INTO `images` VALUES (32, 32, '1660463325_bADDB0RLMLnRaEQ.jpg', NULL, '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `images` VALUES (33, 33, '1660463365_YsOGBEVuHzo9VMm.jpg', NULL, '2022-08-14 07:49:25', '2022-08-14 07:49:25');
INSERT INTO `images` VALUES (34, 34, '1660463421_B8ouCGTXs9xIvkS.jpg', NULL, '2022-08-14 07:50:21', '2022-08-14 07:50:21');
INSERT INTO `images` VALUES (35, 35, '1660463615_0dLEKGz9HSUdbjv.jpg', NULL, '2022-08-14 07:53:35', '2022-08-14 07:53:35');
INSERT INTO `images` VALUES (36, 36, '1660463667_Yc8XZMbqa770EyD.jpg', NULL, '2022-08-14 07:54:27', '2022-08-14 07:54:27');
INSERT INTO `images` VALUES (37, 37, '1660463781_UB0BRAol1XuDDMM.jpg', NULL, '2022-08-14 07:56:21', '2022-08-14 07:56:21');
INSERT INTO `images` VALUES (38, 38, '1660463834_BPcpySUeR11OUWw.jpg', NULL, '2022-08-14 07:57:14', '2022-08-14 07:57:14');
INSERT INTO `images` VALUES (39, 39, '1660463887_7WFyMrbosKmz4oO.jpg', NULL, '2022-08-14 07:58:07', '2022-08-14 07:58:07');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `menus_slug_unique`(`slug` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES (8, 'Women', '0', 'women', 'women', 'women', 1, '2022-08-09 05:59:27', '2022-08-09 05:59:27', NULL);
INSERT INTO `menus` VALUES (9, 'Men', '0', 'Men', 'Men', 'men', 1, '2022-08-09 05:59:38', '2022-08-09 05:59:38', NULL);
INSERT INTO `menus` VALUES (10, 'Bag', '0', 'Bag', 'Bag', 'bag', 1, '2022-08-09 05:59:48', '2022-08-09 05:59:48', NULL);
INSERT INTO `menus` VALUES (11, 'Shoes', '0', 'Shoes', 'Shoes', 'shoes', 1, '2022-08-09 05:59:56', '2022-08-09 05:59:56', NULL);
INSERT INTO `menus` VALUES (12, 'Watches', '0', 'Watches', 'Watches', 'watches', 1, '2022-08-09 06:00:12', '2022-08-09 08:15:33', NULL);
INSERT INTO `menus` VALUES (15, 'Shoes nam', '11', 'Shoes nam', 'Shoes nam', 'shoes-nam', 1, '2022-08-09 09:27:00', '2022-08-14 03:16:17', '2022-08-14 03:16:17');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_08_08_162738_create_menus_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_08_11_100600_create_images_table', 4);
INSERT INTO `migrations` VALUES (9, '2022_08_09_082134_create_products_table', 5);
INSERT INTO `migrations` VALUES (10, '2022_08_12_043127_create_sliders_table', 6);
INSERT INTO `migrations` VALUES (11, '2022_08_12_140935_create_carts_table', 7);
INSERT INTO `migrations` VALUES (12, '2022_08_12_142843_create_sizes_table', 7);
INSERT INTO `migrations` VALUES (13, '2022_08_12_142850_create_colors_table', 7);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15, 2) NULL DEFAULT NULL,
  `price_sale` decimal(15, 2) NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int NULL DEFAULT NULL,
  `active` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (24, 'Esprit Ruffle Shirt', 260000.00, 260000.00, '123', 'Áo thun nữ', 8, 1, NULL, '2022-08-14 03:33:33', '2022-08-14 03:33:33', 'esprit-ruffle-shirt');
INSERT INTO `products` VALUES (25, 'Herschel supply', 320000.00, 320000.00, 'Áo sơ mi nữ', 'Áo sơ mi nữ', 8, 1, NULL, '2022-08-14 03:34:45', '2022-08-14 03:34:45', 'herschel-supply');
INSERT INTO `products` VALUES (26, 'Only Check Trouser', 200000.00, 200000.00, 'Áo sơ mi nam', 'Áo sơ mi nam', 9, 1, NULL, '2022-08-14 03:36:01', '2022-08-14 03:36:01', 'only-check-trouser');
INSERT INTO `products` VALUES (27, 'Classic Trench Coat', 800000.00, 800000.00, 'Áo dạ', 'Áo dạ', 8, 1, NULL, '2022-08-14 03:39:19', '2022-08-14 03:39:19', 'classic-trench-coat');
INSERT INTO `products` VALUES (28, 'Front Pocket Jumper', 300000.00, 300000.00, 'Áo đẹp nè', 'Áo đẹp nè', 8, 1, NULL, '2022-08-14 03:40:07', '2022-08-14 03:40:07', 'front-pocket-jumper');
INSERT INTO `products` VALUES (29, 'Vintage Inspired Classic', 1000000.00, 1000000.00, 'Đồng hồ', 'Đồng hồ', 12, 1, NULL, '2022-08-14 03:45:58', '2022-08-14 03:45:58', 'vintage-inspired-classic');
INSERT INTO `products` VALUES (30, 'Shirt in Stretch Cotton', 400000.00, 400000.00, 'Shirt in Stretch Cotton', 'Shirt in Stretch Cotton', 8, 1, NULL, '2022-08-14 07:46:39', '2022-08-14 07:46:39', 'shirt-in-stretch-cotton');
INSERT INTO `products` VALUES (31, 'Pieces Metallic Printed', 250000.00, 250000.00, 'Pieces Metallic Printed', 'Pieces Metallic Printed', 8, 1, NULL, '2022-08-14 07:47:33', '2022-08-14 07:47:33', 'pieces-metallic-printed');
INSERT INTO `products` VALUES (32, 'Converse All Star Hi Plimsolls', 1300000.00, 1300000.00, 'Converse All Star Hi Plimsolls', 'Converse All Star Hi Plimsolls', 11, 1, NULL, '2022-08-14 07:48:45', '2022-08-14 07:48:45', 'converse-all-star-hi-plimsolls');
INSERT INTO `products` VALUES (33, 'Femme T-Shirt In Stripe', 150000.00, 150000.00, 'Femme T-Shirt In Stripe', 'Femme T-Shirt In Stripe', 8, 1, NULL, '2022-08-14 07:49:25', '2022-08-14 07:49:25', 'femme-t-shirt-in-stripe');
INSERT INTO `products` VALUES (34, 'Herschel supply', 340000.00, 340000.00, 'Herschel supply', 'Herschel supply', 9, 1, NULL, '2022-08-14 07:50:21', '2022-08-14 07:50:21', 'herschel-supply');
INSERT INTO `products` VALUES (35, 'Herschel supply', 500000.00, 500000.00, 'Herschel supply', 'Herschel supply', 8, 1, NULL, '2022-08-14 07:53:35', '2022-08-14 07:55:11', 'herschel-supply');
INSERT INTO `products` VALUES (36, 'T-Shirt with Sleeve', 180000.00, 180000.00, 'T-Shirt with Sleeve', 'T-Shirt with Sleeve', 8, 1, NULL, '2022-08-14 07:54:27', '2022-08-14 07:54:27', 't-shirt-with-sleeve');
INSERT INTO `products` VALUES (37, 'Pretty Little Thing', 120000.00, 120000.00, 'Pretty Little Thing', 'Pretty Little Thing', 8, 1, NULL, '2022-08-14 07:56:21', '2022-08-14 07:56:21', 'pretty-little-thing');
INSERT INTO `products` VALUES (38, 'Mini Silver Mesh Watch', 1200000.00, 1200000.00, 'Mini Silver Mesh Watch', 'Mini Silver Mesh Watch', 12, 1, NULL, '2022-08-14 07:57:14', '2022-08-14 08:02:36', 'mini-silver-mesh-watch');
INSERT INTO `products` VALUES (39, 'Square Neck Back', 200000.00, 200000.00, 'Square Neck Back', 'Square Neck Back', 8, 1, NULL, '2022-08-14 07:58:07', '2022-08-14 07:58:07', 'square-neck-back');

-- ----------------------------
-- Table structure for sizes
-- ----------------------------
DROP TABLE IF EXISTS `sizes`;
CREATE TABLE `sizes`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint UNSIGNED NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `sizes_product_id_foreign`(`product_id` ASC) USING BTREE,
  CONSTRAINT `sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sizes
-- ----------------------------
INSERT INTO `sizes` VALUES (7, 24, 'S', '2022-08-14 03:33:33', '2022-08-14 03:33:33');
INSERT INTO `sizes` VALUES (8, 24, 'M', '2022-08-14 03:33:33', '2022-08-14 03:33:33');
INSERT INTO `sizes` VALUES (9, 24, 'L', '2022-08-14 03:33:33', '2022-08-14 03:33:33');
INSERT INTO `sizes` VALUES (10, 24, 'XL', '2022-08-14 03:33:33', '2022-08-14 03:33:33');
INSERT INTO `sizes` VALUES (11, 25, 'S', '2022-08-14 03:34:45', '2022-08-14 03:34:45');
INSERT INTO `sizes` VALUES (12, 25, 'M', '2022-08-14 03:34:45', '2022-08-14 03:34:45');
INSERT INTO `sizes` VALUES (13, 25, 'L', '2022-08-14 03:34:45', '2022-08-14 03:34:45');
INSERT INTO `sizes` VALUES (14, 25, 'XL', '2022-08-14 03:34:45', '2022-08-14 03:34:45');
INSERT INTO `sizes` VALUES (15, 26, 'S', '2022-08-14 03:36:01', '2022-08-14 03:36:01');
INSERT INTO `sizes` VALUES (16, 26, 'M', '2022-08-14 03:36:01', '2022-08-14 03:36:01');
INSERT INTO `sizes` VALUES (17, 26, 'L', '2022-08-14 03:36:01', '2022-08-14 03:36:01');
INSERT INTO `sizes` VALUES (18, 26, 'XL', '2022-08-14 03:36:01', '2022-08-14 03:36:01');
INSERT INTO `sizes` VALUES (19, 27, 'S', '2022-08-14 03:39:19', '2022-08-14 03:39:19');
INSERT INTO `sizes` VALUES (20, 27, 'M', '2022-08-14 03:39:19', '2022-08-14 03:39:19');
INSERT INTO `sizes` VALUES (21, 27, 'L', '2022-08-14 03:39:19', '2022-08-14 03:39:19');
INSERT INTO `sizes` VALUES (22, 27, 'XL', '2022-08-14 03:39:19', '2022-08-14 03:39:19');
INSERT INTO `sizes` VALUES (23, 28, 'S', '2022-08-14 03:40:07', '2022-08-14 03:40:07');
INSERT INTO `sizes` VALUES (24, 28, 'M', '2022-08-14 03:40:07', '2022-08-14 03:40:07');
INSERT INTO `sizes` VALUES (25, 28, 'L', '2022-08-14 03:40:07', '2022-08-14 03:40:07');
INSERT INTO `sizes` VALUES (26, 28, 'XL', '2022-08-14 03:40:07', '2022-08-14 03:40:07');
INSERT INTO `sizes` VALUES (27, 29, 'free size', '2022-08-14 03:45:58', '2022-08-14 03:45:58');
INSERT INTO `sizes` VALUES (28, 30, 'S', '2022-08-14 07:46:39', '2022-08-14 07:46:39');
INSERT INTO `sizes` VALUES (29, 30, 'M', '2022-08-14 07:46:39', '2022-08-14 07:46:39');
INSERT INTO `sizes` VALUES (30, 30, 'L', '2022-08-14 07:46:39', '2022-08-14 07:46:39');
INSERT INTO `sizes` VALUES (31, 30, 'XL', '2022-08-14 07:46:39', '2022-08-14 07:46:39');
INSERT INTO `sizes` VALUES (32, 31, 'S', '2022-08-14 07:47:33', '2022-08-14 07:47:33');
INSERT INTO `sizes` VALUES (33, 31, 'M', '2022-08-14 07:47:33', '2022-08-14 07:47:33');
INSERT INTO `sizes` VALUES (34, 31, 'L', '2022-08-14 07:47:33', '2022-08-14 07:47:33');
INSERT INTO `sizes` VALUES (35, 31, 'XL', '2022-08-14 07:47:33', '2022-08-14 07:47:33');
INSERT INTO `sizes` VALUES (36, 32, '35', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `sizes` VALUES (37, 32, '36', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `sizes` VALUES (38, 32, '37', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `sizes` VALUES (39, 32, '38', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `sizes` VALUES (40, 32, '39', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `sizes` VALUES (41, 32, '40', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `sizes` VALUES (42, 32, '41', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `sizes` VALUES (43, 32, '42', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `sizes` VALUES (44, 32, '43', '2022-08-14 07:48:45', '2022-08-14 07:48:45');
INSERT INTO `sizes` VALUES (45, 33, 'Free Size', '2022-08-14 07:49:25', '2022-08-14 07:49:25');
INSERT INTO `sizes` VALUES (46, 34, 'S', '2022-08-14 07:50:21', '2022-08-14 07:50:21');
INSERT INTO `sizes` VALUES (47, 34, 'M', '2022-08-14 07:50:21', '2022-08-14 07:50:21');
INSERT INTO `sizes` VALUES (48, 34, 'L', '2022-08-14 07:50:21', '2022-08-14 07:50:21');
INSERT INTO `sizes` VALUES (49, 34, 'XL', '2022-08-14 07:50:21', '2022-08-14 07:50:21');
INSERT INTO `sizes` VALUES (50, 34, 'XXL', '2022-08-14 07:50:21', '2022-08-14 07:50:21');
INSERT INTO `sizes` VALUES (51, 35, 'Free Size', '2022-08-14 07:53:35', '2022-08-14 07:53:35');
INSERT INTO `sizes` VALUES (52, 36, 'S', '2022-08-14 07:54:27', '2022-08-14 07:54:27');
INSERT INTO `sizes` VALUES (53, 36, 'M', '2022-08-14 07:54:27', '2022-08-14 07:54:27');
INSERT INTO `sizes` VALUES (54, 36, 'L', '2022-08-14 07:54:27', '2022-08-14 07:54:27');
INSERT INTO `sizes` VALUES (55, 36, 'XL', '2022-08-14 07:54:27', '2022-08-14 07:54:27');
INSERT INTO `sizes` VALUES (56, 37, 'Free Size', '2022-08-14 07:56:21', '2022-08-14 07:56:21');
INSERT INTO `sizes` VALUES (57, 38, 'Free Size', '2022-08-14 07:57:14', '2022-08-14 07:57:14');
INSERT INTO `sizes` VALUES (58, 39, 'S', '2022-08-14 07:58:07', '2022-08-14 07:58:07');
INSERT INTO `sizes` VALUES (59, 39, 'M', '2022-08-14 07:58:07', '2022-08-14 07:58:07');
INSERT INTO `sizes` VALUES (60, 39, 'L', '2022-08-14 07:58:07', '2022-08-14 07:58:07');
INSERT INTO `sizes` VALUES (61, 39, 'XL', '2022-08-14 07:58:07', '2022-08-14 07:58:07');

-- ----------------------------
-- Table structure for sliders
-- ----------------------------
DROP TABLE IF EXISTS `sliders`;
CREATE TABLE `sliders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `thumb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_by` int NOT NULL,
  `active` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sliders
-- ----------------------------
INSERT INTO `sliders` VALUES (5, 'Abbaba', 'ư', '1660493121_IiIS5DIHEOUDUhP.jpg', 2, 1, '2022-08-14 16:05:21', '2022-08-14 16:05:21', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE,
  UNIQUE INDEX `users_username_unique`(`username` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Hung Tran', 'hungtran1530@gmail.com', 'hunght001', '$2y$10$MjX/Y6B5JckVgAlKiQh0ku25yJw0b10yUyERZW1WMjjB9ZQuEVZFm', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
