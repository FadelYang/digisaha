<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_owner' => 'required|max:50',
            'company_name' => 'required|max:50',
            'company_email' => 'required|max:50|email',
            'company_phone' => 'required|max:15',
            'company_address' => 'required|min:10',
            'company_business_sector' => 'required',
            'company_business_sector_detail' => 'required|max:50',
            'num_of_employees' => 'required',
            'monthly_income' => 'required',
        ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        'company_owner.max' => 'Pastikan menginput nama dengan benar (maximal 50 karakter)',
        'company_owner.required' => 'Nama pemilik usaha wajib diisi',
        'company_name.required' => 'Nama perusahaan wajib diisi',
        'company_email.required' => 'Email perusahaan wajib diisi (gunakan email pemilik usaha jika tidak ada)',
        'company_phone.required' => 'Nomor telepon perusahaan wajib diisi (gunakan nomor telepon pemilik usaha jika tidak ada)',
        'company_phone.max' => 'Patikan memasukkan nomor telepon dengan format yang benar (08515xxxxxx)',
        'company_address.required' => 'Alamat tempat usaha wajib diisi',
        'company_address.min' => 'Pastikan yang diisi adalah alamat lengkap',
        'company_business_sector.required' => 'Jenis usaha wajib diisi',
        'company_business_sector_detail.required' => 'Detail jenis usaha wajib diisi',
        'num_of_employees.required' => 'Jumlah karyawan wajib diisi',
        'monthly_income.required' => 'Pendapatan bulanan perusahaan wajib diisi',
    ];
}
}
