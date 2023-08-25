<?php include("db.php"); ?>
<style type="text/css">
    .tg {
        border-collapse: collapse;
        border-spacing: 0;
    }

    .tg td {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg th {
        border-color: black;
        border-style: solid;
        border-width: 1px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        font-weight: normal;
        overflow: hidden;
        padding: 10px 5px;
        word-break: normal;
    }

    .tg .tg-cly1 {
        text-align: left;
        vertical-align: middle
    }

    .tg .tg-0pky {
        border-color: inherit;
        text-align: left;
        vertical-align: top
    }

    .tg .tg-0lax {
        text-align: left;
        vertical-align: top
    }

    .tg .tg-nrix {
        text-align: center;
        vertical-align: middle
    }
    #tbox{
        border: none;
        background: transparent;
        rows : 1px;
        cols : 55px;
        resize : none;
    }
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 724px">
    <colgroup>
        <col style="width: 173px">
        <col style="width: 198px">
        <col style="width: 353px">
    </colgroup>
    <?php
    $sql = mq("select * from detail where num='2'"); /* 받아온 idx값을 선택 */
    $board = $sql->fetch_array();
    ?>
    <form action="write_detail_ok.php" method="post">
        <thead>
            <tr>
                <th class="tg-0pky">
                    <textarea name="wnum" id="tbox" placeholder="일련번호" maxlength="100" required></textarea>
                </th>
                <th class="tg-0lax">
                    <textarea name="wusedate" id="tbox" placeholder="사용일자" maxlength="100" required></textarea>
                </th>
                <th class="tg-0lax">
                    <textarea name="wbelong" id="tbox" placeholder="소속" maxlength="100" required></textarea>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tg-0lax" colspan="2">
                    <textarea name="wbusiname" id="tbox" placeholder="사업명" maxlength="100" required></textarea>
                </td>
                <td class="tg-0lax">
                    <textarea name="wpaytype" id="tbox" placeholder="결제방식" maxlength="100" required></textarea>
                </td>
            </tr>
            <tr>
                <td class="tg-cly1" colspan="2" rowspan="2">
                    <textarea name="wusedetail" id="tbox" placeholder="사용내역" maxlength="100" required></textarea>
                </td>
                <td class="tg-0lax">
                    <textarea name="wamount" id="tbox" placeholder="금액" maxlength="100" required></textarea>
                </td>
            </tr>
            <tr>
                <td class="tg-0lax">
                    <textarea name="wtradename" id="tbox" placeholder="상호명" maxlength="100" required></textarea>
                </td>
            </tr>
            <tr>
                <td class="tg-0lax" colspan="2">
                    <textarea name="wnote" id="tbox" placeholder="비고" maxlength="100" required></textarea>
                </td>
                <td class="tg-0lax">
                    <textarea name="wphonenum" id="tbox" placeholder="연락처" maxlength="100" required></textarea>
                </td>
            </tr>
            <tr>
                <td class="tg-nrix" colspan="3">
                    <button>사진첨부</button>
                </td>

            </tr>

        </tbody>
        <div>
            <button type="submit">글 작성</button>
        </div>
    </form>
</table>