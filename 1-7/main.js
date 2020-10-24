//課題
class Taiyaki {
    constructor(content){
        this.content = content;
    }

    contents(){
        console.log(`中身は${this.content}です`);
    }
}

let anko = new Taiyaki(`あんこ`);
anko.contents();

let cream = new Taiyaki(`クリーム`);
cream.contents();

let chees = new Taiyaki(`チーズ`);
chees.contents();





