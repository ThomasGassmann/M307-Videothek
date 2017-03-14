import { IEntity } from "./entity";
import { MembershipState } from "./membership";

export class Video implements IEntity {
    private id: number;
    private title: string;
    private length: number = 0;
    private releaseYear: Date;
    private isBorrowed: boolean = false;

    public constructor(id: number, title: string, length: number = null, releaseYear: Date = null, isBorrowed: boolean = null) {
        this.Id = id;
        this.Title = title;
        this.Length = length === null ? 0 : length;
        this.ReleaseYear = releaseYear === null ? new Date("January 1, 1970 00:00:00") : releaseYear;
        this.IsBorrowed = isBorrowed === null ? false : isBorrowed;
    }

    public get Id(): number {
        return this.id;
    }

    public set Id(value: number) {
        this.Id = value;
    }

    public get Title(): string {
        return this.title;
    }

    public set Title(value: string) {
        this.title = value;
    }

    public get Length(): number {
        return this.length;
    }

    public set Length(value: number) {
        this.length = value;
    }

    public get ReleaseYear(): Date {
        return this.releaseYear;
    }

    public set ReleaseYear(value: Date) {
        this.releaseYear = value;
    }
    
    public get IsBorrowed(): boolean {
        return this.isBorrowed;
    }

    public set IsBorrowed(value: boolean) {
        this.isBorrowed = value;
    }
}