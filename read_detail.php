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
</style>
<table class="tg" style="undefined;table-layout: fixed; width: 724px">
  <colgroup>
    <col style="width: 173px">
    <col style="width: 198px">
    <col style="width: 353px">
  </colgroup>
  <?php
  $sql = mq("select * from detail where num='1'"); /* 받아온 idx값을 선택 */
  $board = $sql->fetch_array();
  ?>
  <thead>
    <tr>
      <th class="tg-0pky">일련번호:
        <?php echo $board['num']; ?>
      </th>
      <th class="tg-0lax">사용일자:
        <?php echo $board['usedate']; ?>
      </th>
      <th class="tg-0lax">소속 :
        <?php echo $board['belong']; ?>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="tg-0lax" colspan="2">사업명:
        <?php echo $board['businame']; ?>
      </td>
      <td class="tg-0lax">결제방식:
        <?php echo $board['paytype']; ?>
      </td>
    </tr>
    <tr>
      <td class="tg-cly1" colspan="2" rowspan="2">사용내역:
        <?php echo $board['usedetail']; ?>
      </td>
      <td class="tg-0lax">금액:
        <?php echo $board['amount']; ?>
      </td>
    </tr>
    <tr>
      <td class="tg-0lax">상호명:
        <?php echo $board['tradename']; ?>
      </td>
    </tr>
    <tr>
      <td class="tg-0lax" colspan="2">비고:
        <?php echo $board['note']; ?>
      </td>
      <td class="tg-0lax">연락처:
        <?php echo $board['phonenum']; ?>
      </td>
    </tr>
    <tr>
      <td class="tg-nrix" colspan="3"><img
          src="https://m-img.cafe24img.com/images/help/MT/46._%EA%B1%B0%EB%9E%98%EB%AA%85%EC%84%B8%ED%91%9C_20210210102224.jpg?1614235819"
          width=100% height=atuo></td>
    </tr>
  </tbody>
</table>