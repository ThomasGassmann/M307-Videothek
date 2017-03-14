import { IEntity } from "./entity";

export class MembershipState implements IEntity {
    private id: number;
    private name: string;
    private borrowDays: number;

    public constructor(id: number, name: string, borrowDays: number) {
        this.Id = id;
        this.Name = name;
        this.BorrowDays = borrowDays;
    }

    public getById(id: number): JQueryPromise<MembershipState> {
        return $.post({
            url: '/api/Membership/GetById',
            data: 'id=' + id
        });
    }

    public get Id(): number {
        return this.id;
    }

    public set Id(value: number) {
        this.Id = value;
    }

    public get Name(): string {
        return this.name;
    }

    public set Name(value: string) {
        this.name = value;
    }

    public get BorrowDays(): number {
        return this.borrowDays;
    }

    public set BorrowDays(value: number) {
        this.borrowDays = value;
    }
}