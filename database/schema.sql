USE [master]

/****** Object:  Database [db_raza_bordir]    Script Date: 10/12/2024 20:21:28 ******/
CREATE DATABASE [db_raza_bordir]
 WITH CATALOG_COLLATION = DATABASE_DEFAULT, LEDGER = OFF

ALTER DATABASE [db_raza_bordir] SET COMPATIBILITY_LEVEL = 160

IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [db_raza_bordir].[dbo].[sp_fulltext_database] @action = 'enable'
end

ALTER DATABASE [db_raza_bordir] SET ANSI_NULL_DEFAULT OFF 

ALTER DATABASE [db_raza_bordir] SET ANSI_NULLS OFF 

ALTER DATABASE [db_raza_bordir] SET ANSI_PADDING OFF 

ALTER DATABASE [db_raza_bordir] SET ANSI_WARNINGS OFF 

ALTER DATABASE [db_raza_bordir] SET ARITHABORT OFF 

ALTER DATABASE [db_raza_bordir] SET AUTO_CLOSE OFF 

ALTER DATABASE [db_raza_bordir] SET AUTO_SHRINK OFF 

ALTER DATABASE [db_raza_bordir] SET AUTO_UPDATE_STATISTICS ON 

ALTER DATABASE [db_raza_bordir] SET CURSOR_CLOSE_ON_COMMIT OFF 

ALTER DATABASE [db_raza_bordir] SET CURSOR_DEFAULT  GLOBAL 

ALTER DATABASE [db_raza_bordir] SET CONCAT_NULL_YIELDS_NULL OFF 

ALTER DATABASE [db_raza_bordir] SET NUMERIC_ROUNDABORT OFF 

ALTER DATABASE [db_raza_bordir] SET QUOTED_IDENTIFIER OFF 

ALTER DATABASE [db_raza_bordir] SET RECURSIVE_TRIGGERS OFF 

ALTER DATABASE [db_raza_bordir] SET  ENABLE_BROKER 

ALTER DATABASE [db_raza_bordir] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 

ALTER DATABASE [db_raza_bordir] SET DATE_CORRELATION_OPTIMIZATION OFF 

ALTER DATABASE [db_raza_bordir] SET TRUSTWORTHY OFF 

ALTER DATABASE [db_raza_bordir] SET ALLOW_SNAPSHOT_ISOLATION OFF 

ALTER DATABASE [db_raza_bordir] SET PARAMETERIZATION SIMPLE 

ALTER DATABASE [db_raza_bordir] SET READ_COMMITTED_SNAPSHOT OFF 

ALTER DATABASE [db_raza_bordir] SET HONOR_BROKER_PRIORITY OFF 

ALTER DATABASE [db_raza_bordir] SET RECOVERY FULL 

ALTER DATABASE [db_raza_bordir] SET  MULTI_USER 

ALTER DATABASE [db_raza_bordir] SET PAGE_VERIFY CHECKSUM  

ALTER DATABASE [db_raza_bordir] SET DB_CHAINING OFF 

ALTER DATABASE [db_raza_bordir] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 

ALTER DATABASE [db_raza_bordir] SET TARGET_RECOVERY_TIME = 60 SECONDS 

ALTER DATABASE [db_raza_bordir] SET DELAYED_DURABILITY = DISABLED 

ALTER DATABASE [db_raza_bordir] SET ACCELERATED_DATABASE_RECOVERY = OFF  

EXEC sys.sp_db_vardecimal_storage_format N'db_raza_bordir', N'ON'

ALTER DATABASE [db_raza_bordir] SET QUERY_STORE = ON

ALTER DATABASE [db_raza_bordir] SET QUERY_STORE (OPERATION_MODE = READ_WRITE, CLEANUP_POLICY = (STALE_QUERY_THRESHOLD_DAYS = 30), DATA_FLUSH_INTERVAL_SECONDS = 900, INTERVAL_LENGTH_MINUTES = 60, MAX_STORAGE_SIZE_MB = 1000, QUERY_CAPTURE_MODE = AUTO, SIZE_BASED_CLEANUP_MODE = AUTO, MAX_PLANS_PER_QUERY = 200, WAIT_STATS_CAPTURE_MODE = ON)

USE [db_raza_bordir]

/****** Object:  Table [dbo].[Admin]    Script Date: 10/12/2024 20:21:28 ******/
SET ANSI_NULLS ON

SET QUOTED_IDENTIFIER ON

CREATE TABLE [dbo].[Admin](
	[id_admin] [varchar](10) NOT NULL,
	[username] [varchar](20) NOT NULL,
	[password] [varchar](max) NOT NULL,
	[no_telepon] [varchar](12) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_admin] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

/****** Object:  Table [dbo].[Feedback]    Script Date: 10/12/2024 20:21:29 ******/
SET ANSI_NULLS ON

SET QUOTED_IDENTIFIER ON

CREATE TABLE [dbo].[Feedback](
	[id_feedback] [varchar](10) NOT NULL,
	[id_pemesanan] [varchar](10) NOT NULL,
	[pesan] [varchar](max) NOT NULL,
	[tanggal_feedback] [date] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_feedback] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

/****** Object:  Table [dbo].[Katalog]    Script Date: 10/12/2024 20:21:29 ******/
SET ANSI_NULLS ON

SET QUOTED_IDENTIFIER ON

CREATE TABLE [dbo].[Katalog](
	[id_produk] [varchar](10) NOT NULL,
	[nama_produk] [varchar](50) NOT NULL,
	[gambar_produk] [varchar](max) NOT NULL,
	[deskripsi] [varchar](max) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_produk] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

/****** Object:  Table [dbo].[Pemesanan]    Script Date: 10/12/2024 20:21:29 ******/
SET ANSI_NULLS ON

SET QUOTED_IDENTIFIER ON

CREATE TABLE [dbo].[Pemesanan](
	[id_pemesanan] [varchar](10) NOT NULL,
	[id_admin] [varchar](10) NOT NULL,
	[nama_lengkap] [varchar](50) NOT NULL,
	[nomor_hp] [varchar](12) NOT NULL,
	[alamat] [varchar](max) NOT NULL,
	[desain] [varchar](max) NOT NULL,
	[jenis_media] [varchar](30) NOT NULL,
	[tanggal_order] [date] NOT NULL,
	[tanggal_selesai] [date] NOT NULL,
	[total_harga] [varchar](20) NOT NULL,
	[catatan] [varchar](max) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_pemesanan] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

ALTER TABLE [dbo].[Feedback] ADD  DEFAULT (getdate()) FOR [tanggal_feedback]

ALTER TABLE [dbo].[Pemesanan] ADD  DEFAULT (getdate()) FOR [tanggal_order]

ALTER TABLE [dbo].[Feedback]  WITH CHECK ADD FOREIGN KEY([id_pemesanan])
REFERENCES [dbo].[Pemesanan] ([id_pemesanan])

ALTER TABLE [dbo].[Pemesanan]  WITH CHECK ADD FOREIGN KEY([id_admin])
REFERENCES [dbo].[Admin] ([id_admin])

ALTER TABLE [dbo].[Pemesanan]  WITH CHECK ADD CHECK  (([jenis_media]='Taplak' OR [jenis_media]='Kain' OR [jenis_media]='Jilbab' OR [jenis_media]='Bendera' OR [jenis_media]='Baju'))

USE [master]

ALTER DATABASE [db_raza_bordir] SET  READ_WRITE 

