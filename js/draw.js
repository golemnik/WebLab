function draw() {
    const r = 100;
    const center = new Point(400, 400);

    const canvas = document.getElementById("canvas");
    if (canvas.getContext) {
        const ctx = canvas.getContext("2d");

        ctx.fillStyle = "rgba(0, 0, 0)";
        ctx.fillRect(center.x - 3*r, center.y, 6*r, 1);
        ctx.fillRect(center.x, center.y - 3*r, 1, 6*r);

        ctx.beginPath();
        ctx.arc(center.x, center.y, r, Math.PI, Math.PI/2, true);
        ctx.lineTo(center.x, center.y + 2*r);
        ctx.lineTo(center.x + r, center.y + 2*r);
        ctx.lineTo(center.x + r, center.y);
        ctx.lineTo(center.x, center.y);
        ctx.lineTo(center.x, center.y - 2*r);
        ctx.lineTo(center.x - r, center.y);
        ctx.strokeStyle = "rgba(200, 0, 0 , 0.5)";
        ctx.fillStyle = "rgba(200, 0, 0 , 0.5)";
        ctx.fill();
        ctx.stroke();

        mark_v(ctx, new Point(center.x+r, center.y), "R");
        mark_v(ctx, new Point(center.x+2*r, center.y), "2R");
        mark_v(ctx, new Point(center.x-r, center.y), "R");
        mark_v(ctx, new Point(center.x-2*r, center.y), "2R");

        mark_h(ctx, new Point(center.x, center.y+r), "R");
        mark_h(ctx, new Point(center.x, center.y+2*r), "2R");
        mark_h(ctx, new Point(center.x, center.y-r), "R");
        mark_h(ctx, new Point(center.x, center.y-2*r), "2R");
    }
}

class Point {
    x;
    y;
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }
}

function mark_v (ctx, p, t) {
    ctx.beginPath();
    ctx.lineWidth = 1.5;
    ctx.moveTo(p.x, p.y);
    ctx.lineTo(p.x, p.y+p.y/50);
    ctx.lineTo(p.x, p.y-p.y/50);
    ctx.strokeStyle = "rgba(0,0,0)";
    ctx.fillStyle = "rgba(0, 0, 0)";
    ctx.font = "15px serif";
    ctx.fillText(t, p.x, p.y - p.y/40);
    ctx.fill();
    ctx.stroke();
}

function mark_h (ctx, p, t) {
    ctx.beginPath();
    ctx.lineWidth = 1.5;
    ctx.moveTo(p.x, p.y);
    ctx.lineTo(p.x+p.x/50, p.y);
    ctx.lineTo(p.x-p.x/50, p.y);
    ctx.strokeStyle = "rgba(0,0,0)";
    ctx.fillStyle = "rgba(0, 0, 0)";
    ctx.font = "15px serif";
    ctx.fillText(t, p.x + p.x/40, p.y - p.y/40);
    ctx.fill();
    ctx.stroke();
}

function dot (cxt, p, r) {

}