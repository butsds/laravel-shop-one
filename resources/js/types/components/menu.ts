export interface Menu {
    items: Array<MenuItem>,
    name?: string,
    id: string
}

export interface MenuItem {
    id: number,
    icon?: string,
    name: string,
    href: string,
    children?: Array<MenuItem>
}
