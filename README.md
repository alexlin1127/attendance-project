# 出缺勤管理系統

本系統為課程學員出缺勤管理平台，支援多角色登入、出缺勤紀錄查詢、資料匯出、帳號管理等功能。前端採用 Bootstrap 5，後端以 PHP + Twig 模板引擎開發，資料儲存於 MySQL 資料庫。

## 目錄結構

```
attendance-project/
├── composer.json          # Composer 套件管理設定檔
├── composer.lock          # Composer 鎖定版本檔
├── README.md              # 專案說明文件
├── public/                # 前端入口與主要頁面
│   ├── index.html         # 系統歡迎頁面
│   ├── login.php          # 登入頁面
│   ├── dashboard.php      # 後台首頁與統計
│   ├── att_list.php       # 出缺勤查詢列表
│   ├── switch.php         # 資料與帳號管理路由
│   └── logout.php         # 登出處理
├── inc/                   # 核心配置檔案
│   ├── db.inc.php         # 資料庫連線設定（支援環境變數）
│   └── twig.inc.php       # Twig 模板引擎設定
├── templates/             # Twig 模板檔案
│   ├── dashboard.html.twig
│   ├── login.html.twig
│   └── partial/           # 子模板
│       ├── nav.inc.twig
│       ├── message.html.twig
│       └── backend/       # 後台功能模板
│           ├── acc_manage.html.twig  # 帳號管理
│           ├── add_data.html.twig    # 新增資料
│           ├── add_user.html.twig    # 新增使用者
│           ├── att_list.html.twig    # 出缺勤列表
│           ├── edit.html.twig        # 編輯資料
│           ├── edit_user.html.twig   # 編輯使用者
│           ├── menu.html.twig        # 後台選單
│           └── show_att.html.twig    # 出缺勤詳細顯示
├── vendor/                # Composer 相依套件
└── cache/                 # Twig 模板快取資料夾
```

## 安裝步驟

### 1. 環境需求
- PHP 7.4 或以上版本
- MySQL 5.7 或以上版本
- Composer

### 2. 安裝相依套件
```bash
composer install
```

### 3. 環境變數設定
本專案使用 `vlucas/phpdotenv` 管理環境變數。請在專案根目錄建立 `.env` 檔案：

```env
# 資料庫連線設定
DB_HOST=localhost
DB_PORT=3306
DB_NAME=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
DB_CHARSET=utf8mb4
```

**注意**：`.env` 檔案包含敏感資訊，請勿將其加入版本控制。

### 4. 建立資料表
執行以下 SQL 指令建立所需資料表：

```sql
-- 管理員使用者表
CREATE TABLE `admin_user` (
  `no` INT AUTO_INCREMENT PRIMARY KEY,
  `acc` VARCHAR(255) NOT NULL COMMENT '帳號(Email)',
  `pwd` VARCHAR(255) NOT NULL COMMENT '密碼(MD5)',
  `role` ENUM('admin', 'adv-user', 'nor-user') NOT NULL COMMENT '角色',
  `user_name` VARCHAR(50) NOT NULL COMMENT '使用者名稱',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 出缺勤紀錄表
CREATE TABLE `attendance_log` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(50) NOT NULL COMMENT '學員姓名',
  `class_date` DATE NOT NULL COMMENT '上課日期',
  `class_hours` FLOAT NOT NULL COMMENT '課程總時數',
  `raw_hours` FLOAT COMMENT '實際在校時數',
  `attended_hours` FLOAT COMMENT '出席時數',
  `late_hours` FLOAT COMMENT '遲到時數',
  `leave_early_hours` FLOAT COMMENT '早退時數',
  `absent_hours` FLOAT COMMENT '缺席時數',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 課程資訊表
CREATE TABLE `classes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `class_name` VARCHAR(50) NOT NULL COMMENT '課程名稱',
  `class_date` DATE NOT NULL COMMENT '上課日期',
  `class_hours` FLOAT NOT NULL COMMENT '課程時數',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 插入預設管理員帳號
INSERT INTO `admin_user` (`acc`, `pwd`, `role`, `user_name`) 
VALUES ('admin@example.com', MD5('admin123'), 'admin', 'Administrator');
```

### 5. 啟動本地伺服器
```bash
php -S localhost:8000 -t public
```

### 6. 瀏覽系統
開啟瀏覽器，進入以下網址：
- 系統首頁：[http://localhost:8000](http://localhost:8000)
- 登入頁面：[http://localhost:8000/login.php](http://localhost:8000/login.php)

## 功能說明

### 使用者角色
- **admin（系統管理員）**：擁有所有權限，可管理使用者帳號、新增/編輯/刪除出缺勤資料
- **adv-user（企業帳號）**：可查看所有學員資料，但無法管理帳號
- **nor-user（一般使用者）**：只能查看自己的出缺勤紀錄

### 主要功能

#### 身份驗證
- 多角色登入系統
- Session 管理
- 安全登出

#### 出缺勤管理
- **查詢功能**：依學員姓名、日期範圍查詢出缺勤紀錄
- **分頁顯示**：支援大量資料分頁瀏覽
- **資料匯出**：匯出 JSON 格式報表
- **新增紀錄**：新增學員出缺勤資料（僅管理員）
- **編輯紀錄**：修改現有出缺勤資料（僅管理員）
- **刪除紀錄**：刪除出缺勤資料（僅管理員）

#### 帳號管理
- **新增使用者**：建立新的系統使用者（僅管理員）
- **編輯使用者**：修改使用者資訊（僅管理員）
- **重設密碼**：重設使用者密碼（僅管理員）
- **刪除使用者**：移除系統使用者（僅管理員）

#### 統計報表
- **出席統計**：總出席率、遲到率、早退率
- **課程統計**：總課程時數、課程數、總天數
- **圖表顯示**：使用 Chart.js 顯示各項統計圖表
- **個人報表**：個別學員的詳細出缺勤分析

## 技術棧

### 後端技術
- **PHP 7.4+**：主要開發語言
- **Twig 3.0**：模板引擎，提供安全且靈活的模板系統
- **vlucas/phpdotenv**：環境變數管理套件
- **PDO**：資料庫抽象層，提供 SQL 注入防護

### 前端技術
- **Bootstrap 5**：響應式 CSS 框架
- **Chart.js**：資料視覺化圖表庫
- **HTML5/CSS3/JavaScript**：標準前端技術

### 資料庫
- **MySQL 5.7+**：關聯式資料庫管理系統

### 開發工具
- **Composer**：PHP 套件管理工具
- **Git**：版本控制系統

## 主要檔案說明

### 核心檔案
- `public/login.php`：使用者登入驗證處理
- `public/dashboard.php`：後台首頁，顯示統計資訊與圖表
- `public/att_list.php`：出缺勤紀錄查詢與管理介面
- `public/switch.php`：統一的路由處理器，處理各種 CRUD 操作
- `public/logout.php`：使用者登出處理
- `public/index.html`：系統首頁與歡迎頁面

### 配置檔案
- `inc/db.inc.php`：資料庫連線設定（支援環境變數載入）
- `inc/twig.inc.php`：Twig 模板引擎初始化設定
- `composer.json`：專案相依套件定義

### 模板檔案
- `templates/dashboard.html.twig`：主版型模板
- `templates/login.html.twig`：登入頁面模板
- `templates/partial/nav.inc.twig`：導航選單模板
- `templates/partial/message.html.twig`：訊息提示模板
- `templates/partial/backend/`：後台功能模板集
  - `acc_manage.html.twig`：帳號管理介面
  - `add_data.html.twig`：新增資料表單
  - `add_user.html.twig`：新增使用者表單
  - `att_list.html.twig`：出缺勤列表顯示
  - `edit.html.twig`：編輯資料表單
  - `edit_user.html.twig`：編輯使用者表單
  - `menu.html.twig`：後台功能選單
  - `show_att.html.twig`：出缺勤詳細資訊顯示

## 系統特色

### 安全性
- **SQL 注入防護**：使用 PDO Prepared Statements
- **密碼加密**：MD5 雜湊演算法（建議升級為 bcrypt）
- **Session 管理**：完整的使用者 Session 控制
- **權限控制**：基於角色的存取控制（RBAC）

### 使用者體驗
- **響應式設計**：基於 Bootstrap 5 的 RWD 介面
- **友善提示**：清楚的錯誤訊息與操作回饋
- **直觀操作**：簡潔明瞭的使用者介面
- **分頁瀏覽**：支援大量資料的分頁顯示

### 資料視覺化
- **圖表呈現**：整合 Chart.js 資料視覺化
- **統計指標**：多維度的出缺勤統計分析
- **報表匯出**：支援 JSON 格式資料匯出
- **個人化報表**：針對不同角色提供客製化資訊

### 系統架構
- **MVC 模式**：清楚的程式架構分離
- **模板引擎**：使用 Twig 提升開發效率與安全性
- **環境變數**：支援不同環境的配置管理
- **快取機制**：Twig 模板快取提升效能

## 開發與部署

### 本地開發
```bash
# 複製專案
git clone <repository-url>
cd attendance-project

# 安裝相依套件
composer install

# 編輯環境變數
nano .env

# 啟動開發伺服器
php -S localhost:8000 -t public
```

### 生產環境部署
1. **Web 伺服器設定**：將文件根目錄指向 `public/` 資料夾
2. **權限設定**：確保 `cache/` 資料夾有寫入權限
3. **環境變數**：設定正確的生產環境資料庫連線資訊
4. **快取設定**：在 `inc/twig.inc.php` 中啟用 Twig 快取
