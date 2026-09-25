<template>
    <el-container class="dashboard">

        <!-- ================= SIDEBAR ================= -->
        <el-aside width="280px" class="sidebar">

            
             <h1 class="logo">
                SH<span class="play-o"><span class="play-triangle"></span></span>W<span class="logo-red">TIME</span>
            </h1>

            <!-- MENU -->
            <el-menu
                default-active="1"
                class="sidebar-menu"
                background-color="#0d0d0f"
                text-color="#aaa"
                active-text-color="#fff"
            >

                <el-menu-item index="1">
                    Dashboard
                </el-menu-item>

                <div class="menu-title">CONTENT</div>

                <el-menu-item index="2">
                    Upload content
                </el-menu-item>

                <el-menu-item index="3">
                    Live streaming
                </el-menu-item>

                <el-menu-item index="4">
                    Content library
                </el-menu-item>

                <el-menu-item index="5">
                    Categories
                </el-menu-item>

                <div class="menu-title">AUDIENCE</div>

                <el-menu-item index="6">
                    User management
                </el-menu-item>

                <div class="menu-title">INSIGHTS</div>

                <el-menu-item index="7">
                    Analytics
                </el-menu-item>

                <div class="menu-title">SYSTEM</div>

                <el-menu-item index="8">
                    Settings
                </el-menu-item>

            </el-menu>


            <!-- USER -->
            <div class="user-section">

                <div class="user-avatar">
                    BM
                </div>

                <div class="user-info">
                    <strong>Baraka M.</strong>
                    <small>Super Admin</small>
                </div>

                <el-button size="small" class="exit-btn">
                    Exit
                </el-button>

            </div>

        </el-aside>


        <!-- ================= MAIN ================= -->
        <el-container>

            <!-- HEADER -->
            <el-header class="top-header">

                <h2>Dashboard</h2>

                <div class="header-right">

                    <span class="watching">
                        <span class="online-dot"></span>
                        1,284 watching now
                    </span>

                    <el-button class="alert-btn">
                        Alerts
                        <span class="alert-number">3</span>
                    </el-button>

                </div>

            </el-header>


            <!-- ================= CONTENT ================= -->
            <el-main class="main-content">

                <!-- STATISTICS -->
                <div class="stats-grid">

                    <el-card class="stat-card">
                        <p class="stat-title">TOTAL VIDEOS</p>

                        <h2>248</h2>

                        <span class="increase">
                            ▲ +18
                        </span>

                        <span class="last-month">
                            vs last month
                        </span>
                    </el-card>


                    <el-card class="stat-card">
                        <p class="stat-title">TOTAL VIEWS</p>

                        <h2>4.2M</h2>

                        <span class="increase">
                            ▲ +9.4%
                        </span>

                        <span class="last-month">
                            vs last month
                        </span>
                    </el-card>


                    <el-card class="stat-card">
                        <p class="stat-title">SUBSCRIBERS</p>

                        <h2>38,420</h2>

                        <span class="increase">
                            ▲ +6.2%
                        </span>

                        <span class="last-month">
                            vs last month
                        </span>
                    </el-card>


                    <el-card class="stat-card">
                        <p class="stat-title">REVENUE (JUNE)</p>

                        <h2>TZS 12.4M</h2>

                        <span class="increase">
                            ▲ +11.8%
                        </span>

                        <span class="last-month">
                            vs last month
                        </span>
                    </el-card>

                </div>


                <!-- LOWER CONTENT -->
                <div class="content-grid">

                    <!-- TRENDING CONTENT -->
                    <el-card class="content-card">

                        <div class="card-header">
                            <h3>Trending content</h3>

                            <a href="#">
                                View analytics →
                            </a>
                        </div>


                        <!-- ITEM 1 -->
                        <div class="content-item">

                            <span class="rank">01</span>

                            <div class="thumbnail">
                                ▶
                            </div>

                            <div class="video-info">
                                <strong>
                                    Mahojiano Exclusive: Nyota wa Bongo
                                </strong>

                                <small>
                                    Interviews
                                </small>
                            </div>

                            <span class="views">
                                142.9K
                            </span>

                        </div>


                        <!-- ITEM 2 -->
                        <div class="content-item">

                            <span class="rank">02</span>

                            <div class="thumbnail">
                                ▶
                            </div>

                            <div class="video-info">
                                <strong>
                                    Cheka Tu — EP 24: Mzee wa Vichekesho
                                </strong>

                                <small>
                                    Comedy
                                </small>
                            </div>

                            <span class="views">
                                128.4K
                            </span>

                        </div>


                        <!-- ITEM 3 -->
                        <div class="content-item">

                            <span class="rank">03</span>

                            <div class="thumbnail">
                                ▶
                            </div>

                            <div class="video-info">
                                <strong>
                                    Bongo Gossip Daily: Wanaachana?
                                </strong>

                                <small>
                                    Gossip & Udaku
                                </small>
                            </div>

                            <span class="views">
                                96.2K
                            </span>

                        </div>


                        <!-- ITEM 4 -->
                        <div class="content-item">

                            <span class="rank">04</span>

                            <div class="thumbnail">
                                ▶
                            </div>

                            <div class="video-info">
                                <strong>
                                    LIVE Replay: Fiesta Extravaganza 2026
                                </strong>

                                <small>
                                    Live Events
                                </small>
                            </div>

                            <span class="views">
                                88.7K
                            </span>

                        </div>


                        <!-- ITEM 5 -->
                        <div class="content-item">

                            <span class="rank">05</span>

                            <div class="thumbnail">
                                ▶
                            </div>

                            <div class="video-info">
                                <strong>
                                    Clip: Mchekeshoji wa Wiki #18
                                </strong>

                                <small>
                                    Short Clips
                                </small>
                            </div>

                            <span class="views">
                                74.2K
                            </span>

                        </div>

                    </el-card>


                    <!-- RECENT UPLOADS -->
                    <el-card class="content-card">

                        <div class="card-header">
                            <h3>Recent uploads</h3>

                            <a href="#">
                                Library →
                            </a>
                        </div>


                        <div class="upload-item">

                            <div>
                                <strong>
                                    Utani wa Leo — EP 45
                                </strong>

                                <small>
                                    —
                                </small>
                            </div>

                            <span class="status draft">
                                Draft
                            </span>

                        </div>


                        <div class="upload-item">

                            <div>
                                <strong>
                                    Behind the Scenes: Fiesta 2026
                                </strong>

                                <small>
                                    —
                                </small>
                            </div>

                            <span class="status draft">
                                Draft
                            </span>

                        </div>


                        <div class="upload-item">

                            <div>
                                <strong>
                                    Cheka Tu — EP 25: Shule ya Maisha
                                </strong>

                                <small>
                                    Jul 10, 2026
                                </small>
                            </div>

                            <span class="status scheduled">
                                Scheduled
                            </span>

                        </div>


                        <div class="upload-item">

                            <div>
                                <strong>
                                    Clip: Mchekeshoji wa Wiki #18
                                </strong>

                                <small>
                                    Jul 1, 2026
                                </small>
                            </div>

                            <span class="status published">
                                Published
                            </span>

                        </div>


                        <div class="upload-item">

                            <div>
                                <strong>
                                    Bongo Gossip Daily: Wanaachana?
                                </strong>

                                <small>
                                    Jun 30, 2026
                                </small>
                            </div>

                            <span class="status published">
                                Published
                            </span>

                        </div>


                        <div class="upload-item">

                            <div>
                                <strong>
                                    Mahojiano Exclusive: Nyota wa Bongo
                                </strong>

                                <small>
                                    Jun 28, 2026
                                </small>
                            </div>

                            <span class="status published">
                                Published
                            </span>

                        </div>

                    </el-card>

                </div>

            </el-main>

        </el-container>

    </el-container>
</template>


<script setup>
// Dashboard data will be connected to Laravel later.
</script>


<style scoped>

/* ================= GENERAL ================= */

* {
    box-sizing: border-box;
}

.dashboard {
    min-height: 100vh;
    background: #0d0d0f;
    color: #f5f5f5;
}


/* ================= SIDEBAR ================= */

.sidebar {
    background: #0d0d0f;
    border-right: 1px solid #27272b;
    position: relative;
    min-height: 100vh;
    overflow-y: auto;
}


/* LOGO */

.logo {
    height: 72px;
    display: flex;
    align-items: center;

    padding-left: 20px;

    font-size: 27px;
    font-weight: 900;
    letter-spacing: -2px;

    color: #f5f5f5;

    border-bottom: 1px solid #252529;
}

.logo .red {
    color: #eb2328;
}

.logo .play {
    color: #eb2328;
    font-size: 21px;

    margin: 0 2px;
}
 .play-o {
    width: 42px;
    height: 42px;
    margin: 0 2px;
    border: 5px solid #f5f5f5;
    border-radius: 50%;
    display: grid;
    place-items: center;
    animation: pulse 1.8s ease-in-out infinite;
}
 .play-triangle {
    width: 0;
    height: 0;
    margin-left: 4px;
    border-top: 9px solid transparent;
    border-bottom: 9px solid transparent;
    border-left: 14px solid #eb2328;
}
/* MENU */

.sidebar-menu {
    border-right: none;
    padding-top: 0;
}


.sidebar-menu :deep(.el-menu-item) {
    height: 48px;
    line-height: 48px;
    margin: 0 14px 3px 14px;
    border-radius: 0 8px 8px 0;
}


.sidebar-menu :deep(.el-menu-item.is-active) {
    background: #222126;
    border-left: 4px solid #eb2328;
    color: white !important;
}


.sidebar-menu :deep(.el-menu-item:hover) {
    background: #1b1b1e;
}


.menu-title {
    padding: 22px 32px 8px;

    font-size: 11px;
    font-weight: bold;

    letter-spacing: 2px;

    color: #55555d;
}


/* ================= USER ================= */

.user-section {
    position: sticky;
    bottom: 0;

    display: flex;
    align-items: center;

    gap: 10px;

    padding: 15px;

    background: #0d0d0f;

    border-top: 1px solid #252529;
}


.user-avatar {
    width: 38px;
    height: 38px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #eb2328;

    font-weight: bold;
}


.user-info {
    display: flex;
    flex-direction: column;

    flex: 1;
}


.user-info strong {
    font-size: 14px;
}


.user-info small {
    color: #777780;
    margin-top: 3px;
}


.exit-btn {
    background: transparent;
    color: white;
    border-color: #333338;
}


/* ================= HEADER ================= */

.top-header {
    height: 72px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    padding: 0 28px;

    background: #0d0d0f;

    border-bottom: 1px solid #252529;
}


.top-header h2 {
    margin: 0;

    font-size: 20px;
}


.header-right {
    display: flex;
    align-items: center;

    gap: 22px;
}


.watching {
    color: #777780;
    font-size: 14px;
}


.online-dot {
    display: inline-block;

    width: 8px;
    height: 8px;

    margin-right: 7px;

    background: #22d47b;

    border-radius: 50%;
}


.alert-btn {
    background: #17171a;
    border-color: #303035;

    color: white;
}


.alert-number {
    margin-left: 8px;

    padding: 2px 7px;

    border-radius: 50%;

    background: #eb2328;

    color: white;

    font-size: 12px;
}


/* ================= MAIN ================= */

.main-content {
    padding: 28px;

    overflow-y: auto;
}


/* ================= STATISTICS ================= */

.stats-grid {
    display: grid;

    grid-template-columns:
        repeat(4, 1fr);

    gap: 18px;

    margin-bottom: 24px;
}


.stat-card {
    position: relative;

    overflow: hidden;

    background: #17171a !important;

    border: 1px solid #29292e !important;

    border-radius: 15px !important;
}


.stat-card::before {
    content: "";

    position: absolute;

    top: 0;
    left: 0;
    right: 0;

    height: 4px;

    background: #eb2328;
}


.stat-card :deep(.el-card__body) {
    padding: 24px;
}


.stat-title {
    margin: 0 0 8px;

    color: #85858d;

    font-size: 13px;

    font-weight: bold;

    letter-spacing: 1px;
}


.stat-card h2 {
    margin: 0 0 12px;

    font-size: 34px;

    color: #f5f5f5;
}


.increase {
    display: inline-block;

    padding: 4px 9px;

    border-radius: 12px;

    background: rgba(24, 212, 123, 0.12);

    color: #19d47b;

    font-size: 12px;

    font-weight: bold;
}


.last-month {
    margin-left: 8px;

    color: #68686f;

    font-size: 12px;
}


/* ================= LOWER CONTENT ================= */

.content-grid {
    display: grid;

    grid-template-columns:
        1.6fr 1fr;

    gap: 20px;
}


.content-card {
    background: #17171a !important;

    border: 1px solid #29292e !important;

    border-radius: 15px !important;
}


.content-card :deep(.el-card__body) {
    padding: 20px;
}


/* CARD HEADER */

.card-header {
    display: flex;

    justify-content: space-between;
    align-items: center;

    margin-bottom: 10px;
}


.card-header h3 {
    margin: 0;

    font-size: 17px;
}


.card-header a {
    color: #eb2328;

    font-size: 13px;

    text-decoration: none;
}


/* ================= TRENDING ================= */

.content-item {
    display: flex;

    align-items: center;

    min-height: 76px;

    border-bottom: 1px solid #28282d;

    gap: 14px;
}


.content-item:last-child {
    border-bottom: none;
}


.rank {
    width: 34px;

    color: #4e4e55;

    font-size: 17px;

    font-weight: bold;
}


.thumbnail {
    width: 78px;
    height: 46px;

    display: flex;
    align-items: center;
    justify-content: center;

    background:
        repeating-linear-gradient(
            45deg,
            #202024,
            #202024 8px,
            #18181b 8px,
            #18181b 16px
        );

    border-radius: 7px;

    color: #6d6d74;

    font-size: 16px;
}


.video-info {
    display: flex;

    flex-direction: column;

    flex: 1;

    min-width: 0;
}


.video-info strong {
    font-size: 14px;

    color: #eeeeef;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;
}


.video-info small {
    margin-top: 3px;

    color: #777780;

    font-size: 12px;
}


.views {
    font-size: 14px;

    font-weight: bold;

    color: #dddddf;
}


/* ================= RECENT UPLOADS ================= */

.upload-item {
    display: flex;

    align-items: center;

    justify-content: space-between;

    gap: 12px;

    min-height: 68px;

    border-bottom: 1px solid #28282d;
}


.upload-item:last-child {
    border-bottom: none;
}


.upload-item > div {
    display: flex;

    flex-direction: column;

    min-width: 0;
}


.upload-item strong {
    color: #eeeeef;

    font-size: 14px;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;
}


.upload-item small {
    margin-top: 5px;

    color: #777780;

    font-size: 12px;
}


/* STATUS */

.status {
    padding: 5px 12px;

    border-radius: 15px;

    font-size: 11px;

    font-weight: bold;

    white-space: nowrap;
}


.draft {
    background: #303034;

    color: #aaaab0;
}


.scheduled {
    background: rgba(232, 166, 32, 0.15);

    color: #e9aa27;
}


.published {
    background: rgba(25, 212, 123, 0.15);

    color: #19d47b;
}


/* ================= RESPONSIVE ================= */

@media (max-width: 1100px) {

    .stats-grid {
        grid-template-columns:
            repeat(2, 1fr);
    }

    .content-grid {
        grid-template-columns: 1fr;
    }

}


@media (max-width: 750px) {

    .sidebar {
        width: 220px !important;
    }

    .main-content {
        padding: 18px;
    }

    .top-header {
        padding: 0 18px;
    }

    .watching {
        display: none;
    }

}


@media (max-width: 550px) {

    .stats-grid {
        grid-template-columns: 1fr;
    }

    .sidebar {
        width: 190px !important;
    }

    .logo {
        font-size: 21px;
    }

    .content-item {
        gap: 7px;
    }

    .thumbnail {
        width: 55px;
    }

    .views {
        display: none;
    }

}

</style>
