<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>중고차 검색</title>
        <style>
            select {
                width: 200px;
                margin: 4px;
            }
            button {
                margin: 4px;
            }
            #reset {
                position: relative;
                left: 78px;
            }
            #submit {
                position: relative;
                left: 167px;
            }
        </style>
    </head>
    <body>
        <h3>중고차 검색</h3>
        <form name="usedcar_form" method="post" action="usedcar_list.php">
            자동차 명:
            <select name="name">
                <option value="전체" selected>전체</option>
                <option value="그랜저">그랜저</option>
                <option value="쏘나타">쏘나타</option>
                <option value="아반떼">아반떼</option>
            </select><br>
            주행 거리:
            <select name="distance">
                <option value="전체" selected>전체</option>
                <option value="1">~ 50,000km</option>
                <option value="2">50,000 ~ 100,000km</option>
                <option value="3">100,000km ~</option>
            </select><br>
            차량 색상:
            <select name="color">
                <option value="전체" selected>전체</option>
                <option value="흰색">흰색</option>
                <option value="회색">회색</option>
                <option value="검정">검정</option>
                <option value="기타">기타</option>
            </select><br>
            정렬 방식:
            <select name="sort">
                <option value="1" selected>주행거리 오름차순</option>
                <option value="2">주행거리 내림차순</option>
                <option value="3">가격 오름차순</option>
                <option value="4">가격 내림차순</option>
            </select><br>
            <button type="reset" id="reset">초기화</button>
            <button type="submit" id="submit">검색</button>
        </form>
    </body>
</html>